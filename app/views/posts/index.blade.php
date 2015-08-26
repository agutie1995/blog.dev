@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>
{{-- $users->appends(array('sort' => 'votes'))->links(); --}}
	{{ $posts->appends(array('search' => Input::get('search')))->links() }}

	@foreach ($posts as $post)
		<h3>Title: {{{ $post->title }}}	</h3>
		<small><em>By: {{{$post->user->first_name}}} {{{$post->user->last_name}}} </em></small><br>
		<small>Date Created: {{{ $post->created_at->setTimezone('America/Chicago')->format('F j, Y @ h:i A') }}}</small><br>
		{{{ Str::words($post->body, 20)}}}
		<a href="{{{ action('PostsController@show', $post->id) }}}">Read More</a><br>
	@endforeach

	{{ $posts->appends(array('search' => Input::get('search')))->links() }}
@stop