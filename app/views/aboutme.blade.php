@extends('layouts.master')

@section('content')
	<h1>About Me</h1>
	<hr class="style2">

	<div class="col-md-8">
		<div class="row">
			<img src="/img/pic.jpg" alt="avatar" class="img-responsive img-circle img-profile">
		</div>
		<div class="row">
		    <div class="mini-desc">
		    	<h2 class="aboutme-title">Hi, my name is Alex!</h2>
		    	<p>My heart is in front-end web development but I can do it all. I'm currently in school to get my Bachelor's in graphic design.</p>
		    	<p>While at Codeup, I've worked through full-stack web exercises. Some of the projects are linked in my portfolio. Please take a look around the site and feel free to contact me anytime. I have a passion for creating all kinds of things related with visual arts</p>
		    </div>
		</div>
	</div>

	<div class="col-md-4">
	    <h3 class="title with-icon"><i class="fa fa-credit-card icn-title"></i> Indentity</h3>
		    <div class="identity-area">
		      	<div class="row">
					<div class="col-sm-4"><label>Fullname</label></div>
					<div class="col-sm-8"> Alexandra Gutierrez</div>
				</div>
				<div class="row">
					<div class="col-sm-4"><label>Location</label></div>
					<div class="col-sm-8"> San Antonio, TX</div>
				</div>
				<div class="row">
					<div class="col-sm-4"><label>Email</label></div>
					<div class="col-sm-8"> agutie95@yahoo.com</div>
				</div>
{{-- 				<div class="row">
					<div class="col-sm-4"><label>Connect</label></div>
					<div class="col-sm-8"> <a href="https://www.linkedin.com/pub/alexandra-gutierrez/102/62a/54b">LinkedIn</a></div>
				</div> --}}
		    </div>
	</div>

@stop