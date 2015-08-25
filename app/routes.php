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

Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@doLogin');
Routh::get('/logout', 'HomeController@logout');

Route::resource('/posts', 'PostsController');

Route::get('/resume', 'HomeController@showResume');

// Route::get('/portfolio', 'HomeController@showPortfolio');

// Route::get('/simonsays', 'HomeController@showSimonSays');

// Route::get('/whackamole', 'HomeController@showWhackAMole');

// Route::get('/calculator', 'HomeController@showCalculator');