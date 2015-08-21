<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    {{-- <link rel="stylesheet" href="/css/ajax_blog.css"> --}}

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

</head>
<body>
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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>