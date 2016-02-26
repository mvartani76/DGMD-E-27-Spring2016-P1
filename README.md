#DGMD-E-27-Spring2016-P1

This is the first assignment for DGMD E-27.

#Source Code

The code consists of the following files:

##Source HTML/php:
**index.php** - This is the landing page for the site. It consists of a header at the top with an image the is swapped using media queries. There is also a main section that has some text describing the site and neighborhood as well as some responsive images that use picturefill.js. There is also a sidebar that incorporates a weather widget using the openweather API.

**photogallery.php** - This is a page for showing various neighborhood photo albums which could be accessed by clicking on the image. The images currently do not link anywhere but could later. There is no weather sidebar on this page but this page incorporates the equal heights javascript code from Ben Howdle (http://benhowdle.im/easy-peasy-equal-heights.html).

**contact.php/login.php/register.php** - These are all form based php files with the weather widget side bar on the right side.

##CSS Source Files:
**normalize.css** - The stylesheet that normalizes everything between browsers.<br>
**styles.css** - The main overall stylesheet for the site. This has media queries in it.<br>
**weather-style.css** - Weather widget sidebar specific stylings.<br>
**formstyle.css** - Form specific stylesheet.<br>

##JS Source Files:
**eqheight.js** - Javascript code from Ben Howdle that makes columns the same heights.<br>
**menu.js** - jQuery code snippet that toggles classes to make a mobile responsive menu. It uses a "hamburger button" in the mobile portrait mode.<br>
**openWeather.js** - jQuery code snippet from Michael Lynch (http://michaelynch.com) distributed under MIT license to access the OpenWeather API.<br>

# Assignment Specific Topics
## Browser/Operating System
I primarily used a Google Chrome browser (Version 48.0.2564.116 m) running on a Windows 10 (64 bit) machine and Safari running on an Apple iPhone 6s plus (iOS 9.2.1).
## Grid System
The grid system uses four (4) columns and the CSS layout (styles.css) is shown below...

```
/* grid system */

.row::after {
    content:"";
    display: table;
    clear:both;
} 

[class*='col-'] {
	float: left;
	min-height: 1px;
}
.col-1 {
	width: 25%;
}
.col-1-2-4 {
	width: 25%;
}
.col-2 {
	width: 50%;
}
.col-3 {
	width: 75%;
}
.col-4 {
	width: 100%;
}
```

.col-1-2-4 goes to 50% width in mobile phone landscape screen sizes and 100% in mobile phone portrait (as do all the columns).

##Used Typefaces
This code uses two google typefaces, Lato (for the general paragraph text) and Francois One (for the heading text)...They are linked in to each source file using the source below.<br>
```
<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
```	
Although they look similar, these two typefaces are contrasting due to how they are used and the weighting applied to each. The Lato paragraph text is not weighted heavily while the Francois One heading text is heavier... They are not mixed together so it does not give the appearance of a mistaken typeface. Also, there is actually a website (http://fontpair.co/) that suggests which fonts go together nicely and Lato and Francois One was mentioned as a nice combination of typefaces.

## Responsive/Scaling Typography
Using the recommendations from the link given in class as a starting point (http://typecast.com/blog/a-more-modern-scale-for-web-typography), I scaled both the font-size and the line-height for the various media queries. The two main areas where this comes into play is in the main section of index.php and photogallery.php. The selected source CSS (styles.css) is shown below.

```
/* media queries */

/* Desktop Screen Sizes */
/* Pixel Range: >= 1050px; */
@media only screen and (min-width: 1050px) {
...
	main h2, div.photogallery h2 {
		font-size: 2.5em;
		line-height: 1.25em;		
		padding-left: 0.25em;
		padding-right: 0.25em;
	}
	main p, div.photogallery p {
		font-size: 1.5em;
		line-height: 1.1;
		margin-left: 0.25em;
		margin-right: 0.25em;
	}
...
}

/* Tablet Screen Sizes */
/* Pixel Range: >= 768px; */
@media only screen and (min-width: 768px) and (max-width: 1049px) {
...
	main h2, div.photogallery h2 {
		font-size: 2.25em;
		line-height: 1.2em;
		padding-left: 0.2em;
		padding-right: 0.2em;
	}
	main p, div.photogallery p {
		font-size: 1.25em;
		line-height: 1.15em;
		margin-left: 0.2em;
		margin-right: 0.2em;
	}	
...
}

/* Mobile Landscape Screen Sizes */
/* pixel range: 480-767px */
@media only screen and (min-width: 480px) and (max-width: 767px)  {
...
	main h2, div.photogallery h2 {
		font-size: 1.75em;
		line-height: 1.15em;		
		padding-left: 0.15em;
		padding-right: 0.15em;
	}
	main p, div.photogallery p {
		font-size: 1.1em;
		line-height: 1.1em;
		margin-left: 0.15em;
		margin-right: 0.15em;	
	}
...
}

/* Mobile portrait Screen Sizes */
/* pixel range: <=479px */
@media only screen and (max-width: 479px)  {
...
	main h2, div.photogallery h2 {
		font-size: 1.5em;
		line-height: 1.2em;		
		padding-left: 0.1em;
		padding-right: 0.1em;
	}
	main p, div.photogallery p {
		font-size: 1em;
		line-height: 1.15em;
		text-align: center;
	}
...
}
```
## Responsive Images

Responsive images are handled two ways...
1.) Swapping background images based using media queries
2.) Using Picturefill.js

### Swapping the background header image using media queries

The header background image changes based on screen width. There are four (4) different background images for the header depending on the screen width. The header image is in all the pages for the site... The source html and css code is shown below...

####HTML
```
		<div class="row">
			<header class="col-4">
			</header>
		</div>
```

####CSS (styles.css)
```
@media only screen and (min-width: 1050px) {
	header {
		background: url(../images/sog-entrance-1200.jpg) no-repeat;
		width: 1200px;
		height: 300px;
		font-family: 'Lato', sans-serif; 
		color: #fff;
	}
	...
}

@media only screen and (min-width: 768px) and (max-width: 1049px) {
	header {
		background: url(../images/sog-entrance-1000.jpg) no-repeat;
		width: 1000px;
		height: 300px;
		font-family: 'Lato', sans-serif; 
		color: #fff;
	}
	...
}

@media only screen and 
	(min-width: 480px) and (max-width: 767px)  {

	header {
		background: url(../images/sog-entrance-800.jpg) no-repeat;
		width: 800px;
		height: 300px;
		font-family: 'Lato', sans-serif; 
		color: #fff;
	}
	...
}

@media only screen and (max-width: 479px)  {

	header {
		background: url(../images/sog-entrance-500.jpg) no-repeat;
		width: 500px;
		height: 255px;
		font-family: 'Lato', sans-serif; 
		color: #fff;
	}
	...
}
```
### Swapping images using Picturefill.js
Images in the main section of index.php are swapped based on screen width using picturefill. The source HTML code is shown below.

```
		<!-- Using picturefill, load different pictures depending on the width of the screen
		This picture is in the upper left hand corner of the main section under the <h2> title... -->
		<picture class="first_main_pic">
			<!--[if IE 9]><video style="display: none;"><![endif]-->
			<source srcset="images/sog-entrance-drive-orig-350.jpg" media="(min-width: 1050px)">
			<source srcset="images/sog-entrance-drive-orig-250.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
			<source srcset="images/sog-entrance-drive-orig-200.jpg" media="(min-width: 480px) and (max-width: 767px) ">
			<!--[if IE 9]></video><![endif]-->
			<img src="images/sog-entrance-drive-orig-350.jpg" alt="Drive into Our Neighborhood!">
		</picture>
```

and

```
		<!-- Using picturefill, load different pictures depending on the width of the screen
		This picture is in the lower right hand corner of the main section -->
		<picture class="second_main_pic">
			<!--[if IE 9]><video style="display: none;"><![endif]-->
			<source srcset="images/sog-entrance-sign-250.jpg" media="(min-width: 1050px)">
			<source srcset="images/sog-entrance-sign-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
			<source srcset="images/sog-entrance-sign-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
			<!--[if IE 9]></video><![endif]-->
			<img src="images/sog-entrance-sign.jpg" alt="Drive into Our Neighborhood!">
		</picture>
```
