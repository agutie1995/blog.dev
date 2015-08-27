@extends('layouts.master')

<style>

    #map-canvas {
        width: 70	0px;
        height: 500px;
    }
</style>

@section('content')
	<h1>Contact Me</h1>
	<hr>
	<div class="col-md-8">
		<div id="map-canvas"></div>

    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEJDiyzmynCaGn1EZ5Xr0a3yMaC9FuqPg"></script>

	    <script type="text/javascript">
		    'use strict';

		    var mapOptions = {
		        zoom: 14,
		    	center: {lat: 29.4282712, lng: -98.4923816}
		    };

		    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		    var chickfila = {lat: 29.4282712, lng: -98.4923816};

		    var markerOne = new google.maps.Marker({
		        position: chickfila,
		        map: map
		    });

		    chickInfoWindow.open(map,markerOne);
		</script>
	</div>

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