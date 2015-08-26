@extends('layouts.master')

@section('content')

	{{-- <img src="http://placehold.it/1100x250"> --}}

	<div class="col-md-8">
	<h1>{{{ $post->title }}}</h1>
	<small>By: {{{$post->user->first_name}}} {{{$post->user->last_name}}} | 
	Date Created: {{{ $post->created_at->setTimezone('America/Chicago')->format('F j, Y @ h:i A') }}}</small><br>
	<hr>
		<p>{{{ $post->body }}}</p>

		@if (Auth::check())
			<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
			<button id="deleteBtn">Delete</button>

			{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
			{{ Form::close() }}
		@endif
	</div>
	<div class="col-md-4">
        <!-- Blog Categories Well -->
        <div class="well">
			<h4><label for="subscribe-field">Follow Blog via Email</label></h4>
				<div id="blog_subscription-3" class="input-group">
		            <form class="navbar-form navbar-right" method="GET" role="search" action="{{ action('PostsController@index') }}">
				    	<div class="form-group">
				        	<input name="subscribe" type="text" class="form-control" placeholder="Not Working...Yet">
							<p>
								<input type="hidden" name="action" value="subscribe">
								<input type="hidden" name="blog_id" value="1506909">
								<input type="hidden" name="source" value="http:##">
								<input type="hidden" name="sub-type" value="widget">
								<input type="hidden" name="redirect_fragment" value="blog_subscription-3">
								<input type="hidden" id="_wpnonce" name="_wpnonce" value="60c4b7d2eb">
							</p>
				    	</div>
				    	<button type="submit" class="btn btn-default">Follow</button>
				    </form>	
				</div>
            <!-- /.input-group -->
        </div>
        <!-- Side Widget Well -->
        <div class="well">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>
    </div>
@stop

@section('script')
	<script>
	(function(){
		'use strict';

		$('#deleteBtn').on('click', function(){
			var onConfirm = confirm('Are you sure you want to delete this post?');
			console.log(onConfirm);

			if(onConfirm) {
				$('#formDelete').submit();
			}
		});
	})();
	</script>
@stop