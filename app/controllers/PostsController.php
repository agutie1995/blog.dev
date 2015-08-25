<?php

class PostsController extends \BaseController {
	
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    	$query = Post::with('user');
    	
    	// $query->where('title', 'like', 'P%');
    	// $query->orWhereHas('user', function($q){
    	// 	$q->where('first_name', 'Alex');
    	// });
    	// $query->orWhereHas('user', function($q){
    	// 	$q->where('last_name', 'Gutierrez')
    	// });

		$posts = $query->orderBy('created_at', 'desc')->paginate(5);
		Log::info(Input::all());
    	return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Log::info(Input::all());
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			Log::info('Could not create post ', Input::all());
			Session::flash('errorMessage', 'Uh-oh! Something went wrong. Check the errors below:');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
        	$post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->user_id = Auth::id();
			$post->save();

			Log::info('Post was created successfully ', Input::all());
			Session::flash('successMessage', 'You created ' . Input::get('title') . ' successfully!');
			return Redirect::action('PostsController@index');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		// $user = $post->user;

		// $data = array(
		// 	'post' => $post,
		// 	'user' => $user
		// );

		if (!$post){
			Log::info('404', Input::all());
			Session::flash('errorMessage', 'Page was not found.');
			App::abort(404);
		}
		Log::info(Input::all());
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		Log::info(Input::all());
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if($validator->fails()) {
			Log::info('Post was not edited successfully ', Input::all());
			Session::flash('errorMessage', 'Uh-oh! Something went wrong. Check the errors below:');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Log::info('Post was edited successfully ', Input::all());
			Session::flash('successMessage', 'You edited ' . Input::get('title') . ' successfully!');
			return Redirect::action('PostsController@index');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if (!$post){
			Log::info(Input::all());
			Session::flash('errorMessage', 'Page was not found.');
			App::abort(404);
		}

		$post->delete();
		Log::info(Input::all());
		return  Redirect::action('PostsController@index');
	}

}
