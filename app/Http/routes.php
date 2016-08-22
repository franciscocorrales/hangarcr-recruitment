<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SongsController@index');

Route::get('/songs', 'SongsController@all');
Route::get('/songs/{id}', 'SongsController@show');
Route::post('/songs', 'SongsController@store');
Route::put('/songs/{id}', 'SongsController@update');
Route::delete('/songs/{id}', 'SongsController@destroy');
