<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
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
	                <li><a href="{{{ action('HomeController@showResume') }}}">About</a></li>
	                <li><a href="#">Portfolio</a></li>
	                <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
	                <li><a href="{{{ action('HomeController@contact') }}}">Contact</a></li>
	            	@if (Auth::check())
		                <li class="dropdown navbar-right">
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
	            </ul>
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
	<hr>
	<footer>
		<div class="wrapper">
		  <a id="facebook-link" class="entypo-facebook social" href="https://www.facebook.com/alexandra.gutierrez.79"></a>
		  <a id="twitter-link" class="entypo-twitter social" href="https://www.twitter.com/later_alexgator"></a>
		  <a id="google-plus-link" class="entypo-gplus social" href="#"></a>
		  <a id="linkedIn-link" class="entypo-linkedin social" href="https://www.linkedin.com/pub/alexandra-gutierrez/102/62a/54b"></a>
		  <a id="instagram-link" class="social entypo-instagrem" href="https://www.instagram.com/later_alexgator"></a>
		  <a id="pinterest-link" class="entypo-pinterest social" href="#"></a>
		</div>
	</footer>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="/js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@yield('script')
</body>
</html>