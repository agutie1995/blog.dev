@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>

	{{ $posts->links() }}

	@foreach ($posts as $post)
		<h2>Title: {{{ $post->title }}}	</h2>

		<a href="{{{ action('PostsController@show', $post->id) }}}">Read Post</a>
	@endforeach

@stop