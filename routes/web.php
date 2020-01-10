<?php
//Home route
Route::get('/', 'QuestionController@index')->name('home');

//Category listing route
Route::get('/category/{id}', 'CategoryController@show')->name('category');

//Show all users route
Route::get('/users', 'UserController@index')->name('users');

//Show my questions route
Route::get('/myquestions', 'UserController@myquestions')->name('myquestions');

//Authentication routes
Auth::routes();

//Question resource routes
Route::resource('/question', 'QuestionController');

//Store and destroy answer routes
Route::post('/answer', 'AnswerController@store')->name('answer.store');
Route::delete('/answer/{answer}', 'AnswerController@destroy')->name('answer.destroy');