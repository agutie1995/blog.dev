@extends('layouts.master')

@section('content')
	<h1>Portfolio</h1>
	<hr>
	<ul>
		<li class="mix webdesign mix_all" style=" display: inline-block; opacity: 1;">
	        <div class="item-portfolio" id="whackamole-portfolio">
	         	<a href="{{{ action('HomeController@showWhackAMole') }}}" class="preview-portfolio imgWrapper image-popup">
	            <div class="mask">
	            	{{-- <div class="icn-center"><i class="fa fa-link "></i> --}}
	            	</div>
	            </div>
	            <img src="/img/whack_a_mole.png" alt="Whack_a_Mole" class="img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5>Whack-A-Mole</h5><br>
	         		{{-- <small>a Web Design</small> --}}
	         	</div>
	        	</a>
	        </div>
	    </li>
	    <li class="mix webdesign mix_all" style=" display: inline-block; opacity: 1;">
	        <div class="item-portfolio" id="simplesimon-portfolio">
	         	<a href="{{{ action('HomeController@showSimpleSimon') }}}" class="preview-portfolio imgWrapper image-popup">
	            <div class="mask">
	            	{{-- <div class="icn-center"><i class="fa fa-link "></i> --}}
	            	</div>
	            </div>
	            <img src="/img/simple_simon.png" alt="Simple_Simon" class="img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5>Simple Simon</h5><br>
	         		{{-- <small>a Web Design</small> --}}
	         	</div>
	        	</a>
	        </div>
	    </li>
	   	<li class="mix webdesign mix_all" style=" display: inline-block; opacity: 1;">
	        <div class="item-portfolio" id="calculator-portfolio">
	         	<a href="{{{ action('HomeController@showCalculator') }}}" class="preview-portfolio imgWrapper image-popup">
	            <div class="mask">
	            	{{-- <div class="icn-center"><i class="fa fa-link "></i> --}}
	            	</div>
	            </div>
	            <img src="/img/calculator.png" alt="JS_Calculator" class="img-responsive" style="opacity: 1; filter: none;">
	         	<div class="desc-portfolio">
	         		<h5>JavaScript Calculator</h5><br>
	         		{{-- <small>a Web Design</small> --}}
	         	</div>
	        	</a>
	        </div>
	    </li>
	</ul>
@stop