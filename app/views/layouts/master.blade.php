<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

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
	            <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	                <li class="active"><a href="#">Home</a></li>
	                <li><a href="#about">About</a></li>
	                <li><a href="#contact">Contact</a></li>
	                <li class="dropdown">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		                <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li role="separator" class="divider"></li>
		                    <li class="dropdown-header">Nav header</li>
		                    <li><a href="#">Separated link</a></li>
		                    <li><a href="#">One more separated link</a></li>
		                </ul>
	                </li>
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

	
	<!-- Latest compiled and minified JavaScript -->
	<script src="/js/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@yield('script')
</body>
</html>