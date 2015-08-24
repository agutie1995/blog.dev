@extends('layouts.master')

@section('content')
	<h2>Edit Post</h2>

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
		@include('posts.create-edit-form')
	{{ Form::close() }}

@stop