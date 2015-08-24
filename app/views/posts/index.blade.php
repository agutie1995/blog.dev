@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>

	{{ $posts->links() }}

	@foreach ($posts as $post)
		<h2>Title: {{{ $post->title }}}	</h2>
		<p>Date Created: {{{ $post->created_at->setTimezone('America/Chicago')->format('F j, Y @ h:i A') }}}</p>


		<button><a href="{{{ action('PostsController@show', $post->id) }}}">Read Post</a></button>
	@endforeach

@stop