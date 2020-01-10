<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use App\Category;
use Illuminate\Http\Request;
use Session;
use Redirect;

class QuestionController extends Controller
{
    /*
        Using the middleware, so no external guests can access this code
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
        Reads all of the questions from the DB
    */
    public function index()
    {   
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $questions = Question::orderBy('created_at', 'DESC')->paginate(4);
        return view('home', compact('questions', 'categories'));
    }

    /*
        Shows the form for creating a new question
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('create', compact('categories'));
    }

    /*
        Stores a question to the DB
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required | min:5',
            'body' => 'required | min:10',
            'category_id' => 'required'
        ]);

        $question = new Question;
        $question->subject = $request->input('subject');
        $question->body = $request->input('body');
        $question->category_id = $request->input('category_id');
        $question->user_id = auth()->user()->id;

        $question->save();
        return redirect()->route('home');
    }

    /*
        Shows a particular question
     */
    public function show(Question $question)
    {   
        $answers = $question->answer->sortByDesc('created_at');
        return view('question', compact('question', 'answers'));
    }

    /*
        Edit form for a particular question, but if only you are the author of that question
     */
    public function edit(Question $question)
    {   
        if (auth()->user()->id === $question->user_id){
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('edit', compact('question', 'categories'));
        } else {
            session()->flash('message', 'You cannot edit other users questions!');
            return redirect()->route('home');
        }
    }

    /*
        Saves changes to the updated question, but only if you are the author of that question
     */
    public function update(Request $request, Question $question)
    {
        if (auth()->user()->id === $question->user_id){
            $this->validate($request, [
                'subject' => 'required | min:5',
                'body' => 'required | min:10',
                'category_id' => 'required'
            ]);

            $question->subject = $request->input('subject');
            $question->body = $request->input('body');
            $question->category_id = $request->input('category_id');

            $question->save();
            return redirect(route('question.index'));
        }
    }

    /*
        Removes a question only when the IF LOOP is true, else redirect to home route
        The IF LOOP checks if you are the author of the question
     */
    public function destroy(Question $question)
    {
        if (auth()->user()->id === $question->user_id){
            $question->delete();
            session()->flash('message', 'Question removed successfully');
            return redirect()->route('home');
        } else {
            session()->flash('message', 'You cannot remove other users questions!');
            return redirect()->route('home');
        }
    }
}
