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

// Route::get('/', function()
// {
// 	return View::make('/');
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     return View::make('sayhello')->with('name', $name);
// });

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::resource('/posts', 'PostsController@index');
Route::resource('/posts/{id}', 'PostsController@show');
Route::resource('/posts/{id}', 'PostsController@s');


Route::get('/portfolio', function()
{
    return "This is my portfolio.";
    return View::make('portfolio');
});


// // roll dice
// Route::get('/rolldice/{guess}', function($guess)
// {
// 	$randNumber = mt_rand(1, 6);

// 	if ($guess == $randNumber) {
// 		$message = 'You guess was correct!';
// 	} else {
// 		$message = 'Your guess was incorrect...';
// 	}
	
// 	$data = array(
// 		'guess' => $guess,
// 		'randnumber' => $randNumber,
// 		'message' => $message,
// 		);

//     return View::make('rolldice')->with($data);

// });
