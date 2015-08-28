<head>
    <!-- Latest compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> --}}
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/css/hello.css">;
</head>
<body>
    <div id="backstretch">
        <img id="cover-photo" class="img-responsive" alt="Null" src="/img/cover_photo.jpg">
    </div>
        <div id="cover-text">
            <h1 class="cover-font img-responsive">Alexandra Gutierrez</h1>
            <h3 class="cover-font lead img-responsive"> Full-Stack Web Developer</h3>
            <a href="{{{ action('HomeController@showResume') }}}" id="learn-more" class="cover-font img-responsive" >Learn more</a>
        </div> 
        <a id="photo-by" class="img-responsive" href="http://thestreetphotog.blogspot.com/" target="_blank">Photo By: Jesse Acosta</a>

    <script src="/js/jquery.js"></script>
    <script type="text/javascript" src="https://code.jquery.com//jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>