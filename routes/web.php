<?php

// welcome page
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
// logged in home view
Route::get('/home', 'ImageController@index')->name('home');

// Game stuff
Route::get('/play', 'GameController@index');
Route::post('/battle/{winner}-{loser}', 'GameController@battle');

// Submit stuff
Route::get('/submit', 'ImageController@create');
Route::post('/submit', 'ImageController@store');
