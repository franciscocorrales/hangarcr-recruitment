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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('songs', 'App\Api\V1\Http\Controllers\SongsController@all');
	$api->get('songs/{id}', 'App\Api\V1\Http\Controllers\SongsController@show');
	$api->post('songs', 'App\Api\V1\Http\Controllers\SongsController@store');
	$api->put('songs/{id}', 'App\Api\V1\Http\Controllers\SongsController@update');
	$api->delete('songs/{id}', 'App\Api\V1\Http\Controllers\SongsController@destroy');
});

Route::get('/', 'SongsController@index');

/*Old version, made without plugins*/
Route::get('/api/v0/songs', 'SongsController@all');
Route::get('/api/v0/songs/{id}', 'SongsController@show');
Route::post('/api/v0/songs', 'SongsController@store');
Route::put('/api/v0/songs/{id}', 'SongsController@update');
Route::delete('/api/v0/songs/{id}', 'SongsController@destroy');

Route::any('/{any}', 'SongsController@index')->where('any', '.*');
