<!DOCTYPE html>
<html>
 <head>
 <?php include_once('links.php')?> 
 <?php include_once('jssor_links.php')?>
 <?php include_once("tracking.php") ?>
  <title>Salt Flats Film Festival</title>
 </head>
 <body>
	 <?php include_once('header.php')?> 
	 	<div class="container">
			<div id="content">
				<a href="/winning-films">
				<div class="banner text-center">Check out the 2016 Salt Flats Film winners!!!</div>
				</a>
				 <div class="row">	
						<div id="main-page">
							<h2>SALT FLATS FILM FESTIVAL</h2>
							<div class="center-slider">
								<?php include_once('jssor_slider.php')?>
							</div>
							<h3>Presented by</h3>
							<a href="http://www.kidsfindjoy.org">
							<img class="img-responsive center center-block" src= "/img/joy-logo.jpg">
							</a>
						</div>
				 </div>
			 </div>
		 </div>
	  <?php include_once('footer.php')?> 
 </body>
</html>