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

Route::get('/', function () {
    return view('pages.main');
});


Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/test', 'ApiController@test');
Route::get('/userInfo/{email?}', 'ApiController@getUserByEmail');
Route::get('/userList', 'ApiController@getUsers');

Route::get('/bestPlayers', [
		'as' => 'etg.best.players',
		'uses' => 'ApiController@getBestPlayers'
	]);

Route::get('/bestTeams', [
		'as' => 'etg.best.teams',
		'uses' => 'ApiController@getBestTeams'
	]);


Route::get('/faq', [
	'as' => 'etg.faq',
	'uses' => 'PagesController@getFaq'
	]);

Route::get('/', [
	'as' => 'etg.home',
	'uses' => 'PagesController@getHome'
	]);

Route::get('/#rag', [
	'as' => 'etg.rag',
	'uses' => 'PagesController@getHome'
	]);

Route::get('/#prizes', [
	'as' => 'etg.prizes',
	'uses' => 'PagesController@getHome'
	]);