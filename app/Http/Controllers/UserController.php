<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;

class UserController extends Controller
{   

    /*
        Using the middleware for authorized only people
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
        Shows all the registered users with all of their contact info
    */
    public function index(){
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('users.index', compact('users'));
    }

    /*
        Shows a list of questions for the logged in user, with all the info
    */
    public function myquestions(){
        $userID = auth()->user()->id;
        $myQuestions = Question::where('user_id', '=', $userID)->orderBy('created_at', 'DESC')->get();
        return view('users.myquestions', compact('myQuestions'));
    }
}
