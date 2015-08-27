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

Route::get('/', 'HomeController@showWelcome');

Route::resource('/posts', 'PostsController');

Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@doLogin');
Route::get('/signup', 'HomeController@signup');
Route::get('/logout', 'HomeController@doLogout');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/simonsays', 'HomeController@showSimonSays');
Route::get('/portfolio/whackamole', 'HomeController@showWhackAMole');
Route::get('/calculator', 'HomeController@showCalculator');

Route::get('/contact', 'HomeController@contact');