<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
        return Redirect::action('HomeController@showResume');
	}

	public function login()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/');
		} else {
			//Display session flash
			//log email that tried to authenticate
		    return Redirect::action('HomeController@login');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		//Display session flash
		return Redirect::to('/');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showSimonSays()
	{
		return View::make('simonesays');
	}

	public function showWhackAMole()
	{
		return View::make('whackamole');
	}	

	public function showCalculator()
	{
		return View::make('calculator');
	}

}
