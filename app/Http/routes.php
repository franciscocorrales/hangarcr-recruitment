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

Route::get('/api/v1/songs', 'SongsController@all');
Route::get('/api/v1/songs/{id}', 'SongsController@show');
Route::post('/api/v1/songs', 'SongsController@store');
Route::put('/api/v1/songs/{id}', 'SongsController@update');
Route::delete('/api/v1/songs/{id}', 'SongsController@destroy');

Route::any('/{any}', 'SongsController@index')->where('any', '.*');
