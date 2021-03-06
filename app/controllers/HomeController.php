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
			Session::flash('errorMessage', 'Uh-oh! Something went wrong. Please try signing in again.');
			//log email that tried to authenticate
		    return Redirect::action('HomeController@login');
		}
	}
	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have been successfully logged out.');
		return Redirect::to('/');
	}

	public function aboutme()
	{
		return View::make('aboutme');
	}

	public function showResume()
	{
		return View::make('resume');
	}
	public function getDownload(){
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/info.pdf";
        $headers = array(
              'Content-Type: resume/docx',
            );
        return Response::download($file, 'alexandra_gutierrez_resume.pdf', $headers);
	}

	public function portfolio()
	{
		return View::make('portfolio');
	}
	public function showSimpleSimon()
	{
		return View::make('simplesimon');
	}
	public function showWhackAMole()
	{
		return View::make('whackamole');
	}	
	public function showCalculator()
	{
		return View::make('calculator');
	}
	public function showAdlister()
	{
		return View::make('adlister');
	}

	public function contact()
	{
		return View::make('contact');
	}
}