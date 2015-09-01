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

Route::get('/', function () {
    return view('welcome');
});

Route::get('resume', 'ResumeController@index');
Route::get('resume/{id}/edit', 'ResumeController@update');
Route::get('resume/{id}', 'ResumeController@show');

//Route::get('jobs/add','JobController@create');
//Route::post('jobs','JobController@store');
Route::resource('jobs', 'JobController');
Route::resource('schools','SchoolController');
Route::resource('skills', 'SkillsController');
Route::resource('task','taskController');

Route::get('home', 'ResumeController@update');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');