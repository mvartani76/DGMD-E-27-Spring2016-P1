"DGMD-E-27-Spring2016-P1"

This is the first assignment for DGMD E-27.

The code consists of the following files:

Source HTML/php:
index.php - This is the landing page for the site. It consists of a header at the top with an image the is swapped using media queries. There is also a main section that has some text describing the site and neighborhood as well as some responsive images that use picturefill.js. There is also a sidebar that incorporates a weather widget using the openweather API.

photogallery.php - This is a page for showing various neighborhood photo albums which could be accessed by clicking on the image. The images currently do not link anywhere but could later. There is no weather sidebar on this page but this page incorporates the equal heights javascript code from Ben Howdle (http://benhowdle.im/easy-peasy-equal-heights.html).

contact.php/login.php/register.php - These are all form based php files with the weather widget side bar on the right side.

CSS Source Files:
normalize.css - The stylesheet that normalizes everything between browsers.
styles.css - The main overall stylesheet for the site. This has media queries in it.
weather-style.css - Weather widget sidebar specific stylings.
formstyle - Form specific stylesheet.

JS Source Files:
eqheight.js - Javascript code from Ben Howdle that makes columns the same heights.
menu.js - jQuery code snippet that toggles classes to make a mobile responsive menu. It uses a "hamburger button" in the mobile portrait mode.
openWeather.js - jQuery code snippet from Michael Lynch (http://michaelynch.com) distributed under MIT license to access the OpenWeather API.
