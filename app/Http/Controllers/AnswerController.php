<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /*
        Using the middleware, so the only people who can access this are the logged users
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* 
        Stores the new answer submitted by the form in each question
        It saves the answer (required, min 5 characters), the current user id and the question id
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'answer' => 'required | min:5'
        ]);

        $answer = new Answer;
        $answer->user_id = auth()->user()->id;
        $answer->question_id = $request->input('question_id');
        $answer->body = $request->input('answer');

        $answer->save();
        return redirect()->back();
    }

    /*
        Removes the answer, but only if the current logged user id matches the user id of the answer,
        so each user can remove only his answers
    */
    public function destroy(Answer $answer)
    {
        if (auth()->user()->id === $answer->user_id){
            $answer->delete();
            session()->flash('message', 'Answer removed');
            return redirect()->back();
        } else {
            session()->flash('message', 'You cannot remove other users answers!');
            return redirect()->back();
        }
    }
}
