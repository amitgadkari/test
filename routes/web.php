<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('songs/index','SongController@index');

Route::get('songs/create','SongController@create');

Route::post('songs/save','SongController@store');



Route::get('songs/{id}/edit','SongController@edit');
Route::post('songs/{id}/update','SongController@store');






// Auth::routes();

// Route::get('/home', 'HomeController@index');
