@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/portfolio.css') }}">
@stop

@section('content')
	<h1>AdLister Gallery</h1>
	<hr class="style2">
	<p>Co-created by: <a href="https://github.com/remington9" target="_blank" id="rem_github">Remington Williams</a> || <a href="https://github.com/adLister/AdLister" target="_blank" id="adlister_repo">Click Here</a> to view the GitHub repository.
	</p>

	<ul class="gallery">
		<li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_welcome.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_welcome_small.png" alt="adlister_welcome_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Welcome Page</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	    <li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_index.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_index_small.png" alt="adlister_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Index</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	    <li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_myaccount.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_myaccount_small.png" alt="adlister_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">My Account</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
		<li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_single_show.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_single_show_small.png" alt="adlister_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Single Ad View</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	    <li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_create.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_create_small.png" alt="adlister_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Create Ad Form</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	   	<li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_edit.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_edit_small.png" alt="adlister_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Edit Ad Form</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	   	<li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_category.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_category_small.png" alt="adlister_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Category</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	   	<li class="mix adlister-images">
	        <div class="item-portfolio">
	         	<a href="/img/adlister_screenshots/adlister_category2.png" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister_screenshots/adlister_category2_small.png" alt="adlister_img" class="grayscale img-responsive">
	            <div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Category 2</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	</ul>
@stop