@extends('layouts.master')

@section('content')
	<h2>Posts</h2>
	<form action="{{{ action('PostsController@update') }}}" method="POST">
		<input type="hidden" name="_method" value="PUT">

		<input type="text" name="title" value="{{{Input::old('title')}}}" placeholder="Title" autofocus>
		<textarea type="text" name="body" placeholder="Contents Here">{{{ Input::old('body')}}}</textarea>
		<button id="submit-button" type='submit'>Submit</button>
	</form>
@stop