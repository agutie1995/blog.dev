@extends('layouts.master')

@section('content')
	<h1>Contact Me</h1>
	<hr>
	<div class="col-md-8">
		<h1>Map Here</h1>
		{{-- <div id="map-canvas"></div>

    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl_KPjaB6zIRUV6wbvqU4zAuqjbj0Iaqk"></script>

	    <script type="text/javascript">
		    'use strict';

		    var mapOptions = {
		        zoom: 12,
		    	center: {lat: 29.5694083, lng: -98.4305361}
		    };

		    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		    var chickfila = {lat: 29.6103849, lng:-98.4699036};

		    var markerOne = new google.maps.Marker({
		        position: chickfila,
		        map: map
		    });

		    var chickInfoWindow	= new google.maps.InfoWindow({
		        content: 'Chick-fil-A'
		    });

		    chickInfoWindow.open(map,markerOne);
		</script> --}}

	<div class="col-md-4">
		<div class="well">
			<h3>Contact Info</h3>
			<p><i class="fa fa-home"></i>Street St. San Antonio, TX</p>
			<p><i class="fa fa-envelope"></i> example@example.com </p>
			<p><i class="fa fa-phone"></i> (###)###-####</p>
			<p></p>
		</div>
	</div>

@stop