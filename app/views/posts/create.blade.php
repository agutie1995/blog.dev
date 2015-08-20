@extends('layouts.master')

@section('content')
	<form action="/form" method="POST">
		<input type="text" name="title" placeholder="Title" autofocus>
		<textarea type="text" name="body" placeholder="Contents Here"></textarea>
		<button type='submit'>Submit</button>
	</form>
@stop