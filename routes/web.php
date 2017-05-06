<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// welcome page
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
// logged in home view
Route::get('/home', 'ImageController@index')->name('home');

// Game stuff
Route::get('/play', 'GameController@index');

// Submit stuff
Route::get('/submit', 'ImageController@create');
Route::post('/submit', 'ImageController@store');
