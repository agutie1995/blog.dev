<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/main.css">

	@yield('style')

</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#">Alexandra Gutierrez</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	            	@if (Auth::check())
		                <li class="dropdown">
		                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{{Auth::user()->first_name}}} <span class="caret"></span></a>
			                <ul class="dropdown-menu">
			                    <li><a href="{{{ action('PostsController@create') }}}">Create a Post</a></li>
			                    <li><a href="#">My Posts</a></li>
			                    <li><a href="#">My Account</a></li>
			                    <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
		                	</ul>
	                	</li>
	            	@else
	            		<li><a id="signin" href="{{{ action('HomeController@login') }}}">Sign In</a><li>
	            		{{-- <li><a href="{{{ action('HomeController@signin') }}}">Sign Up</a></li> --}}
	            	@endif
	                <li><a href="{{{ action('HomeController@showResume') }}}">Home</a></li>
	                <li><a href="#">About</a></li>
	                <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
	                <li><a href="#">Contact</a></li>
	            </ul>
	            <form class="navbar-form navbar-right" method="GET" role="search" action="{{ action('PostsController@index') }}">
	            {{-- {{Form::open(array('action' => 'PostsController@index', 'method' => 'GET'))}} --}}
			    	<div class="form-group">
			        	<input name="search" type="text" class="form-control" placeholder="Search">
			    	</div>
			    	<button type="submit"class="btn btn-default">Submit</button>
			    </form>
			    {{-- {{Form::close()}} --}}
            </div>
        </div>
    </nav>

		@if ($errors->has())
			<div class="alert alert-danger" role="alert">
				@foreach ($errors->all() as $error)
					<li>{{{$error}}}</li>
				@endforeach
			</div>
		@endif

	<main class="container">

    	@yield('content')

	</main>

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="/js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@yield('script')
</body>
</html>