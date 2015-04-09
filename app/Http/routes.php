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


Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@index');

Route::get('/colors', 'HomeController@getIndex');

// Route::get('/facebook/login', function()
// {
	
// } 'EntryController@getLogin');
Route::get('/inscriere', 'EntryController@getIndex');
Route::post('/inscriere', 'EntryController@postIndex');
