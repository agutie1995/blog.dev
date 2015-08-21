@extends('layouts.master')

@section('content')
	<h2>Posts</h2>
	<form action="{{{ action('PostsController@store') }}}" method="POST">
		<input type="text" name="title" value="{{{Input::old('title')}}}" placeholder="Title" autofocus>
		<textarea type="text" name="body" placeholder="Contents Here">{{{ Input::old('body')}}}</textarea>
		<button type='submit'>Submit</button>
	</form>
@stop