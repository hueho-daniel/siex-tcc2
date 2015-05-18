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

Route::get('/', [ 'as' => 'home_page', 'uses' => 'HomeController@index' ]);

Route::get('/login', [ 'as' => 'login_page', 'uses' => 'HomeController@login_page' ]);
Route::post('/login', [ 'as' => 'login', 'uses' => 'HomeController@login' ]);
Route::get('/signup', [ 'as' => 'signup_page', 'uses' => 'HomeController@signup_page' ]);
Route::post('/signup', [ 'as' => 'signup', 'uses' => 'HomeController@signup' ]);
Route::get('/logout', [ 'as' => 'logout', 'uses' => 'HomeController@logout' ]);
Route::get('/users', [ 'as' => 'users', 'uses' => 'HomeController@users' ]);

Route::get('/programs/{id}/file', 'ProgramsController@showFile');
Route::resource('programs', 'ProgramsController');

Route::get('/projects/{id}/file', 'ProjectsController@showFile');
Route::resource('projects',	'ProjectsController');

Route::resource('courses', 'CoursesController');
Route::resource('events', 'EventsController');

Route::get('/about', function()
{
	return View::make('layout', [ 'content' => View::make('about') ]);
});