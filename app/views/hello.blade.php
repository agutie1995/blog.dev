<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/css/hello.css">
</head>
<body>
    <div class="container">
        <div class="col-md-7">
            <div id="cover-text">
                <h1 class="cover-font img-responsive">Alexandra Gutierrez</h1>
                <h3 class="cover-font img-responsive">Full-Stack Web Developer</h3>
                <a id="learn-more" class="cover-font img-responsive" href="{{{ action('HomeController@showResume') }}}">Learn more</a>
            </div> 
            <div class="box-note">
                <div id="slider-note" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="item active">
                            Everyone is a genius, but if you judge a fish by its
                            ability to climb a tree, it will live its whole life
                            believing that it is stupid.<br>
                            <div id="attribution">
                                - Albert Einstein
                            </div>
                        </div>
                        <div class="item">
                            Sometimes the questions are complicated and the answers
                            are simple.<br>
                            <div id="attribution">
                                - Dr. Seuss
                            </div>
                        </div>
{{--                         <div class="item">
                            <br>
                            <div id="attribution">
                                - Person
                            </div>
                        </div>
                        <div class="item">
                            Quote<br>
                            <div id="attribution">
                                - Person
                            </div>
                        </div>
                        <div class="item">
                            Quote<br>
                            <div id="attribution">
                                - Person
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div id="img-backstretch">
                <img id="cover-photo" alt="Null" src="/img/seniorPic.jpg">
            </div>
        </div>
        <a id="photo-by" class="img-responsive" href="http://thestreetphotog.blogspot.com/" target="_blank">Photo By: Jesse Acosta</a>

    </div>
    <script src="/js/jquery.js"></script>
    <script type="text/javascript" src="https://code.jquery.com//jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>