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
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Things to Do</a></li>
					<li class="active"><a href="./photogallery.php">Photo Gallery</a></li>
					<li><a href="./login.php">Login</a></li>
					<li><a href="./register.php">Register</a></li>
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>
		<div class="row">
			<h2>Shores of Glenwood Photo Gallery</h2>
			<p>We are all very proud of the beauty and serenity of our neighborhood. Please click on the albums below to see the beauty of the land, the houses, the wildlife, and most importantly the people of Shores of Glenwood.</p>
			<p>We would love for you to share your Shores of Glenwood photo memories with us. Please contact us and we will upload your photos to this site.</p> 
		</div>
		<div class="row sameHeights">
			<div class="col-1-2-4">
				<h3>The Nature Preserve</h3>
			    <a href="#"><img src="images/sog-preserve-entrance-250.jpg" alt="Our Nature Preserve"></a>
			    <p>We are so lucky to have a state nature preserve with a forest, lake and a river with lots of natural wildlife.</p>
			</div>
			<div class="col-1-2-4">
				<h3>The Front Pond</h3>
			    <a href="#"><img src="images/sog-pond-winter-350.jpg" alt="The Front Pond"></a>
			    <p>The pond near our subdivision entrance way is both beautiful as well as a source for winter enjoyment.</p>
			</div>
			<div class="col-1-2-4">
				<h3>Shores of Glenwood at Night</h3>
			    <a href="#"><img src="images/sog-entrance-night-250.jpg" alt="Shores of Glenwood at Night"></a>
			    <p>The beauty of our neighborhood at night during the holidays...</p>
			</div>
			<div class="col-1-2-4">
				<h3>Our Houses</h3>
			    <a href="#"><img src="images/sog-houses-300.jpg" alt="Our Houses"></a>
			    <p>We have many beautiful houses in our neighborhood. Please see pictures of the houses that our residents have shared.</p>
			</div>
		</div>
	</div>
	<div class="row">
	    <footer class="col-4">
	    	<p>&copy; 2016 Shores of Glenwood Neighborhood Association </p>
	    </footer>
	</div>

	<script src="js/eqheight.js"></script>
	<script type="text/javascript">
	if ('addEventListener' in window) {
	    window.addEventListener('resize', function(){
	        sameHeights();
	    });
	    window.addEventListener('load', function(){
	        sameHeights();
	    });
	}
	</script>
</body>
</html>