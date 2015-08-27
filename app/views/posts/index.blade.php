@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>
	<hr class="style2">
	<div class="col-md-8">
		{{ $posts->appends(array('search' => Input::get('search')))->links() }}
		@foreach ($posts as $post)
			<h3>{{{ $post->title }}}	</h3>
			<small>By: {{{$post->user->first_name}}} {{{$post->user->last_name}}} | 
			Date Created: {{{ $post->created_at->setTimezone('America/Chicago')->format('F j, Y @ h:i A') }}}</small><br>
			<p>{{{ Str::words($post->body, 20)}}}</p>x
			<a class="read-more" href="{{{ action('PostsController@show', $post->id) }}}">Read More</a><br>
		@endforeach

		{{ $posts->appends(array('search' => Input::get('search')))->links() }}
	</div>

	<div class="col-md-4">
        <!-- Blog Search Well -->
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
	            <form class="search-input navbar-form navbar-right" method="GET" role="search" action="{{ action('PostsController@index') }}">
			    	<div class="form-group">
			        	<input name="search" type="text" class="form-control" placeholder="Search">
			    	</div>
			    	<button type="submit" class="btn btn-default">Submit</button>
			    </form>
            </div>
            <!-- /.input-group -->
        </div>
        <!-- Blog Categories Well -->
        <div class="well">
			<h4><label for="subscribe-field">Follow Blog via Email</label></h4>
			<div class="input-group">
	            <form class="subscribe-input navbar-form navbar-right" method="GET" action="#">
			    	<div class="form-group">
			        	<input name="subscribe" type="text" class="form-control" placeholder="Not Working...Yet">
						<p>
							<input type="hidden" name="action" value="subscribe">
							<input type="hidden" name="blog_id" value="1506909">
							<input type="hidden" name="source" value="http:##">
							<input type="hidden" name="sub-type" value="widget">
							<input type="hidden" name="redirect_fragment" value="blog_subscription">
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





