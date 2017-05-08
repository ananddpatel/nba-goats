<?php

// welcome page
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


// logged in home view
Route::get('/home', 'ImageController@index')->name('home');
Route::get('/submit', 'ImageController@create');
Route::post('/submit', 'ImageController@store');
Route::delete('/submit/{image}', 'ImageController@destroy');

Route::get('/comments/{image}', 'CommentController@show');
Route::post('/comments/{image}', 'CommentController@store');

// Game stuff
Route::get('/play', 'GameController@index');
Route::post('/battle/{winner}-{loser}', 'GameController@battle');
Route::get('/leaderboard', 'GameController@leaderboard');
