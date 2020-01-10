<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;

class CategoryController extends Controller
{
    /* Using the middleware, so only the logged in people can access it */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* Showing all posts that belong to the given category ($id) */
    public function show($id)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $currentCategory = Category::find($id);
        $questions = Question::where('category_id', $id)->orderBy('created_at', 'DESC')->paginate(5);
        return view ('home', compact('questions', 'categories', 'currentCategory'));
    }
}
