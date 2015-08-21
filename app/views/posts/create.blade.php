@extends('layouts.master')

@section('content')
	<h2>Create a Post</h2>

	<form action="{{{ action('PostsController@store') }}}" method="POST">
		{{-- <input type="hiden" name="_method" value="PUT"> --}}
		{{-- {{ Form::token() }} --}}
		
		<div class="form-group @if($errors->has('title)) has-error @endif">
			<input class="control-label" type="text" name="title" value="{{{Input::old('title')}}}" placeholder="Title" autofocus>
		</div>
		<div class="form-group @if($errors->has('title)) has-error @endif">
			<textarea class="control-label" type="text" name="body" placeholder="Contents Here">{{{ Input::old('body')}}}</textarea>
		</div>
		<button type='submit'>Submit</button>
	</form>
@stop