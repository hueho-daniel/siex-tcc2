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

Route::get('/', ['as' => 'home_page', 'uses' => 'HomeController@index']);

Route::resource('programs', 'ProgramsController');
Route::resource('projects',	'ProjectsController');
Route::resource('courses', 'CoursesController');
Route::resource('events', 'EventsController');

Route::get('/about', function()
{
	return View::make('layout', [ 'content' => View::make('about') ]);
});