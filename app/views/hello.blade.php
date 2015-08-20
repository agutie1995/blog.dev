@extends('layouts.master')

@section('title')
    Alexandra Gutierrez
@stop


@section('content')
    
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand"></h3>
                        <nav>
                            <ul class="nav masthead-nav">
                              <li class="active"><a href="#">Home</a></li>
                              <li><a href="#">Features</a></li>
                              <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="inner cover">
                    <h1 class="cover-heading">Alexandra Gutierrez</h1>
                    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                    <p class="lead">
                        <a hraf="{{{ action('HomeController@showWelcome') }}}" class="btn btn-md btn-default" >Enter</a>
                    </p>
                </div>
                <div class="mastfoot">
                    <div class="inner">
                      <p>Cover template for <a href="http://getbootstrap.com"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>    

@stop