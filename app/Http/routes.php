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
	$api->get('songs', 'App\Http\Controllers\SongsController@all');
	$api->get('songs/{id}', 'App\Http\Controllers\SongsController@show');
	$api->post('songs', 'App\Http\Controllers\SongsController@store');
	$api->put('songs/{id}', 'App\Http\Controllers\SongsController@update');
	$api->delete('songs/{id}', 'App\Http\Controllers\SongsController@destroy');
});

Route::get('/', 'SongsController@index');

Route::any('/{any}', 'SongsController@index')->where('any', '.*');
