<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'HEllo Laravel';
});

Route::get('/hello/{name?}', 'HelloController@showIndex');

Route::get('/form', 'HelloFormController@showForm');
Route::post('/form', 'HelloFormController@postForm');
Route::get('/blade', 'HelloFormController@showBlade');

Route::get('/my/long/path/to/blade', array('uses' => 'HelloFormController@showBlade',
  'as' => 'bladepath'));  
