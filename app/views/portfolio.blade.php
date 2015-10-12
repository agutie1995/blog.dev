@extends('layouts.master')

@section('content')
	<h1>Portfolio</h1>
	<hr class="style2">
	<ul>
		<li class="mix webdesign mix_all">
	        <div class="item-portfolio" id="whackamole-portfolio">
	         	<a href="{{{ action('HomeController@showWhackAMole') }}}" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/whack_a_mole.png" alt="Whack_a_Mole" class="grayscale img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Whack-A-Mole</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	   	<li class="mix webdesign mix_all">
	        <div class="item-portfolio" id="calculator-portfolio">
	         	<a href="{{{ action('HomeController@showCalculator') }}}" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/calculator.png" alt="JS_Calculator" class="grayscale img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">JavaScript Calculator</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	    <li class="mix webdesign mix_all">
	        <div class="item-portfolio" id="simplesimon-portfolio">
	         	<a href="{{{ action('HomeController@showSimpleSimon') }}}" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/simple_simon.png" alt="Simple_Simon" class="grayscale img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Simple Simon</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	   	<li class="mix webdesign mix_all">
	        <div class="item-portfolio" id="calculator-portfolio">
	         	<a href="{{{ action('HomeController@showAdlister') }}}" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/adlister.png" alt="JS_Calculator" class="grayscale img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">AdLister Gallery</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	   	<li class="mix webdesign mix_all">
	        <div class="item-portfolio" id="calculator-portfolio">
	         	<a href="http://mentalhelpnetwork.com/" target="_blank" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/mentalhelp.png" alt="Mental_Help" class="grayscale img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Mental Help</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	    <li class="mix webdesign mix_all">
	        <div class="item-portfolio" id="calculator-portfolio">
	         	<a href="{{{ action('PostsController@index') }}}" class="preview-portfolio imgWrapper image-popup">
	            <img src="/img/blog.png" alt="Laravel_Blog" class="grayscale img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5 class="item-portfolio-name">Laravel Blog</h5>
	         	</div>
	        	</a>
	        </div>
	    </li>
	</ul>
@stop