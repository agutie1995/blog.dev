@extends('layouts.master')

@section('content')
	<h2>Create a Post</h2>

	{{ Form::open(array('action' => array('PostsController@index'))) }}
		
		
	{{ Form::close() }}

@stop