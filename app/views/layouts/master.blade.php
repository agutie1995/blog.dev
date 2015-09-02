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
	
	@yield('style')
</head>
<body>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-66961002-1', 'auto');
		ga('send', 'pageview');
	</script>

	<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="{{{ action('HomeController@showWelcome') }}}">Alexandra Gutierrez</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	            	{{-- <li><a href="{{{ action('HomeController@aboutme') }}}"><i class="fa fa-user"></i>About Me</a></li> --}}
	                <li><a href="{{{ action('HomeController@showResume') }}}"><i class="fa fa-newspaper-o"></i>Resumé</a></li>
	                <li><a href="{{{ action('HomeController@portfolio') }}}"><i class="fa fa-folder-open"></i>Portfolio</a></li>
	                <li><a href="{{{ action('PostsController@index') }}}"><i class="fa fa-pencil"></i>Blog</a></li>
	                <li><a href="{{{ action('HomeController@contact') }}}"><i class="fa fa-envelope"></i>Contact</a></li>
{{-- 	            	@if (Auth::check())
		                <li class="signin dropdown">
		                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{{Auth::user()->first_name}}} <span class="caret"></span></a>
			                <ul class="dropdown-menu">
			                    <li><a href="{{{ action('PostsController@create') }}}">Create a Post</a></li>
			                    <li><a href="#">My Posts</a></li>
			                    <li><a href="#">My Account</a></li>
			                    <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
		                	</ul>
	                	</li>
	            	@else
	            		<li class="signin"><a href="{{{ action('HomeController@login') }}}"><i class="fa fa-sign-in"></i>Sign In</a><li>
	            		{{-- <li><a href="{{{ action('HomeController@signin') }}}">Sign Up</a></li> --}}
	            	{{-- @endif --}}
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
</body>

	<hr class="style2">
	<footer>
		<div class="wrapper">
		  <a id="facebook-link" class="entypo-facebook social" href="https://www.facebook.com/alexandra.gutierrez.79" target="_blank"></a>
		  <a id="twitter-link" class="entypo-twitter social" href="https://www.twitter.com/later_alexgator" target="_blank"></a>
		  <a id="google-plus-link" class="entypo-gplus social" href="https://plus.google.com/115191459348083464621/" target="_blank"></a>
		  <a id="linkedIn-link" class="entypo-linkedin social" href="https://www.linkedin.com/pub/alexandra-gutierrez/102/62a/54b" target="_blank"></a>
		  <a id="github-link" class="entypo-github social" href="https://github.com/agutie1995/" target="_blank"></a>
		  <a id="instagram-link" class="social entypo-instagrem" href="https://www.instagram.com/later_alexgator" target="_blank"></a>
		</div>
	</footer>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="/js/jquery.js"></script>
	<script type="text/javascript" src="https://code.jquery.com//jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@yield('script')
</body>
</html>