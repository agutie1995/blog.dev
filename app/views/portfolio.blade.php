@extends('layouts.master')

@section('content')
	<h1>Portfolio</h1>
	<hr>
	<ul>
		<li class="mix webdesign mix_all" style=" display: inline-block; opacity: 1;">
	        <div class="item-portfolio">
	         	<a href="{{{ action('HomeController@showWhackAMole') }}}" class="preview-portfolio imgWrapper image-popup">
	            <div class="mask">
	            	<div class="icn-center"><i class="fa fa-link "></i>
	            	</div>
	            </div>
	            <img src="/img/whack_a_mole.png" alt="Whack_a_Mole" class="img-responsive" style="opacity: 1; filter: none;">
	        	</a>
	         	<div class="desc-portfolio">
	         		<h5>PERSONAL  PROJECT</h5><br>
	         		<small>a Web Design</small>
	         	</div>
	        </div>
	    </li>
	</ul>
@stop