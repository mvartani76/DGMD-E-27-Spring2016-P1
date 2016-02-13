<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shores of Glenwood</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/weather-style.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
	    // Picture element HTML5 shiv
	    document.createElement( "picture" );
	</script>
	<script src="js/picturefill.min.js" async></script>
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<header class="col-4">
			</header>
		</div>
		<div class="row">
			<nav class="col-4">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Things to Do</a></li>
					<li><a href="#">Photo Gallery</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		</div>
		<div class="row">
			<main class="col-3">
				<picture>
					<!--[if IE 9]><video style="display: none;"><![endif]-->
					<source srcset="img/townhall-400.jpg" media="(min-width: 1014px)">
					<source srcset="img/townhall-300.jpg" media="(min-width: 702px) and (max-width: 1013px) ">
					<!--[if IE 9]></video><![endif]-->
					<img srcset="img/townhall-188.jpg" alt="Welcome to Arlington!">
				</picture>

				<h2>Welcome to the Shores of Glenwood Neighborhood Association Website!</h2>
				<p>This site contains information about our great community located in Commerce Township, Michigan. Shores of Glenwood is a highly esteemed neighborhood of homes set in a carefully preserved environment with majestic oak trees and evergreens, beautiful rolling hills, and a few ponds. We are an active community of families, young couples, empty-nesters, and other lively people who enjoy a peaceful atmosphere and close proximity to city attractions and water recreation areas.</p>
				<p><a href="http://www.arlingtonma.gov" target="_blank">Read more &gt;&gt;</a></p>
			</main>
			<div class="col-1 outside-w-wrapper">
				<h3>Local Time &amp; Weather</h3>
				<?php
				// Return date/time info of a timestamp; then format the output
				date_default_timezone_set('America/New_York');
				
				$mydate=getdate();
				echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
				echo "<br>";
				
   				
   				$currenttime = date('h:i A');
   				echo date('h:i A',strtotime($currenttime));
   				echo "<br>";
   				echo "<br>";
				?>
				<div class="weather-wrapper hide">
				<img src="" class="weather-icon" alt="Weather Icon" />
		
				<p><strong>Place</strong></br>
				<span class="weather-place"></span></p>
		
				<p><strong>Temperature</strong>
				<br /><span class="weather-temperature"></span></p>
				
				<p><strong>Description</strong>
				<br /><span class="weather-description capitalize"></span></p>
				
				<p><strong>Humidity</strong>
				<br /><span class="weather-humidity"></span></p>
				
				<p><strong>Wind speed</strong>
				<br /><span class="weather-wind-speed"></span></p>
				
				<p><strong>Sunrise</strong>
				<br /><span class="weather-sunrise"></span></p>
				
				<p><strong>Sunset</strong>
				<br /><span class="weather-sunset"></span></p>
				</div>
			</div>
		</div>
		<!--
		<div class="row sameHeights">
			<div class="col-1-2" data-key="sameHeights">
				<h3>Minuteman Bikeway</h3>
			    <img src="img/bikeway-225.jpg" alt="Minuteman Bikeway.">
			    <p>Winding through Cambridge, Arlington, Lexington, and Bedford, there's lots to enjoy.</p>
			    <p><a href="http://www.minutemanbikeway.org/" target="_blank">Read more &gt;&gt;</a></p>
			</div>
			<div class="col-1-2" data-key="sameHeights">
		    	<h3>Near Boston</h3>
		    	<img src="img/boston-225.jpg" alt="Boston from Robbins Farm Park.">
		    	<p>Arlington is just 6 miles from Boston, and it's served by subway and bus service.</p>
		    	<p><a href="http://www.mbta.com" target="_blank">Read more &gt;&gt;</a></p>
		    </div>
		    <div class="col-1-2" data-key="sameHeights">
		    	<h3>Art and Beauty</h3>
		    	<img src="img/statue-225.jpg" alt="Native American statue.">
		    	<p>"Menotomy Indian Hunter", by Cyrus E. Dallin (1911), is on display in the Winfield Robbins Memorial Garden. </p>
		    	<p><a href="http://commons.wikimedia.org/wiki/File:Menotomy_Indian_Hunter_by_Cyrus_E._Dallin_-_Arlington,_Massachusetts.JPG" target="_blank">Read more &gt;&gt;</a></p>
		    </div>
		    <div class="col-1-2" data-key="sameHeights">
		    	<h3>Historic Structures</h3>
		    	<img src="img/watertower-225.jpg" alt="Arlington Water Tower." class="img-responsive">
		    	<p>The Arlington Water Tower is just one of many unique and historic structures in Arlington.</p>
		    	<p><a href="http://en.wikipedia.org/wiki/Arlington_Reservoir_(Arlington,_Massachusetts)" target="_blank">Read more &gt;&gt;</a></p>
		    </div>-->
	</div>
	<div class="row">
	    <footer class="col-4">
	    	<p>&copy; 2016 Shores of Glenwood Neighborhood Association </p>
	    </footer>
	</div>

	<!--<script src="js/eqheight.js"></script>
	<script type="text/javascript">
	if ('addEventListener' in window) {
	    window.addEventListener('resize', function(){
	        sameHeights();
	    });
	    window.addEventListener('load', function(){
	        sameHeights();
	    });
	}
	</script>-->
	<script src="/js/openWeather.js"></script>
	<script>
		$(function() {
		
			$('.weather-temperature').openWeather({
				key: '1ae2a03185008da881e3c6cf3c53b1fc',
				city: 'Commerce Township, MI',
				units: 'f',
				descriptionTarget: '.weather-description',
				windSpeedTarget: '.weather-wind-speed',
				minTemperatureTarget: '.weather-min-temperature',
				maxTemperatureTarget: '.weather-max-temperature',
				humidityTarget: '.weather-humidity',
				sunriseTarget: '.weather-sunrise',
				sunsetTarget: '.weather-sunset',
				placeTarget: '.weather-place',
				iconTarget: '.weather-icon',
				customIcons: '/images/icons/weather/',
				success: function() {
				
					//show weather
					$('.weather-wrapper').show();
					
				},
				error: function(message) {
				
					console.log(message);
				
				}
			});
			
		});
	
	</script>
</body>
</html>

















