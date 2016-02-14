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
	<link rel="stylesheet" href="css/formstyle.css">
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
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Things to Do</a></li>
					<li><a href="#">Photo Gallery</a></li>
					<li><a href="./login.php">Login</a></li>
					<li><a href="./register.php">Register</a></li>					
					<li class="active"><a href="./contact.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>
		<div class="row">
			<main class="col-3">
		  
			  <form id="contact_id" method="post">
			    <h3>Quick Contact</h3>
			    <h4>We would love to hear from you! Please contact us today, and get reply with in 24 hours!</h4>
			    <fieldset><input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus></fieldset>
			    <fieldset><input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required></fieldset>
			    <fieldset><input placeholder="Your Email Address" id="emailaddr" name="emailaddr" type="email" tabindex="3"></fieldset>
			    <fieldset><input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="4"></fieldset>
			    <fieldset><input placeholder="Your Web Site starts with http://" id="weburl" name="weburl" type="url" tabindex="5">
			    </fieldset>
				<fieldset><h4>What type of message do you want to send?</h4>
				    <input type="radio" id="dept1" name="dept" value="general" tabindex="6" checked> General
				    <input type="radio" id="dept2" name="dept" value="sales" tabindex="7"> Sales
				    <input type="radio" id="dept3" name="dept" value="marketing" tabindex="8"> Marketing
				    <input type="radio" id="dept4" name="dept" value="technical" tabindex="9"> Technical
				</fieldset>
			    <fieldset><textarea placeholder="Type your Message Here...." tabindex="10" required></textarea>
			    </fieldset>
			    <h4 class="centerh4">Preferred time for phone contact...</h4>
			    <div class="form50">
			    <fieldset><label>Start Time</label><input id="start_time" name="start_time" type="time" tabindex="11" value="00:00"></fieldset>
			  </div>
			      <div class="form50">
			    <fieldset><label>End Time</label><input id="end_time" name="end_time" type="time" tabindex="12" value="23:59"></fieldset>
			  </div>
			    <fieldset>
			      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
			    </fieldset>
			  </form>
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
















