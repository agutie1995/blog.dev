@extends('layouts.master')

<style>

    #map-canvas {
        width: 70	0px;
        height: 500px;
    }
</style>

@section('content')
	<h1>Contact Me</h1>
	<hr class="style2">
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
		<div class="well">
			<h4><label for="subscribe-field">Follow Blog via Email</label></h4>
			<div class="input-group">
	            <form class="subscribe-input navbar-form navbar-right" method="GET" action="#">
			    	<div class="form-group">
			        	<input name="subscribe" type="text" class="form-control" placeholder="Not Working...Yet">
						<p>
							<input type="hidden" name="action" value="subscribe">
							<input type="hidden" name="blog_id" value="1506909">
							<input type="hidden" name="source" value="http:##">
							<input type="hidden" name="sub-type" value="widget">
							<input type="hidden" name="redirect_fragment" value="blog_subscription">
							<input type="hidden" id="_wpnonce" name="_wpnonce" value="60c4b7d2eb">
						</p>
			    	</div>
			    	<button type="submit" class="btn btn-default">Follow</button>
			    </form>	
			</div>
            <!-- /.input-group -->
        </div>
	</div>

@stop