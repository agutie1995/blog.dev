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

Route::get('/resume', 'HomeController@showResume');

Route::resource('/posts', 'PostsController');


Route::get('orm-test', function ()
{
    $post1 = new Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->body  = 'It is super easy to create a new post.';
	$post1->save();

	$post2 = new Post();
	$post2->title = 'Post number two';
	$post2->body  = 'The body for post number two.';
	$post2->save();
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
