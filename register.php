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
					<li class="active"><a href="./register.php">Register</a></li>					
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>
		<div class="row">
			<main class="col-3">
				<form id="register_id" method="post">
					<h3>Registration</h3>
				    <h4>Please fill out the information below to register with the Shores of Glenwood site...</h4>
				    <div class="form50">
				      <fieldset><input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Street Address 1" id="streetaddr1" name="streetaddr1" type="text" tabindex="3" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Street Address 2" id="streetaddr2" name="streetaddr2" type="text" tabindex="4"></fieldset>
				      <fieldset><input placeholder="City" id="city" name="city" type="text" tabindex="5" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="State/Province" id="state_prov" name="state_prov" type="text" tabindex="6" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Zip Code / Postal Code" id="zip_post_code" name="zip_post_code" type="text" tabindex="7" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Country" id="country" name="country" type="text" tabindex="8" required><span class="error"></span></fieldset>
				    </div>
				    <div class="form50">
				      <fieldset><input placeholder="Your Email Address (minimum of 5 characters)" id="emailaddr" name="emailaddr" type="email" tabindex="9" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Confirm Email Address" id="confirmemailaddr" name="confirmemailaddr" type="email" tabindex="10" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="11" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Desired Username" id="username" name="username" type="text" tabindex="13" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Password" id="userpassword" name="userpassword" type="password" tabindex="14" required><span class="error"></span></fieldset>
				      <fieldset><input placeholder="Confirm Password" id="confirmuserpassword" name="confirmuserpassword" type="password" tabindex="15" required><span class="error"></span></fieldset>
				    </div>
				    <fieldset>
				      <button name="submit" type="submit" id="register-submit" data-submit="...Sending">Submit</button>
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