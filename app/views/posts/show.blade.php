@extends('layouts.master')

@section('content')

	<h1>{{{ $post->title }}}</h1>
	<p><?= $post->created_at->setTimezone('America/Chicago')->format('F j, Y @ h:i A'); ?></p>
	<p>{{{ $post->body }}}</p>

	<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
	<button id="deleteBtn">Delete</button>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
	{{ Form::close() }}

@stop

@section('script')
	<script>
	(function(){
		'use strict';

		$('#deleteBtn').on('click', function(){
			// console.log('The DELETE button was clicked');

			var onConfirm = confirm('Are you sure you want to delete this post?');
			console.log(onConfirm);

			if(onConfirm) {
				$('#formDelete').submit();
			}
		});
	})();
	</script>
@stop