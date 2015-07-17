<?php
	$directory = ltrim($_SERVER['PHP_SELF'],'/');
	$directory = rtrim($directory,'.php');
	$directories = array("index","about","contact","sponsors", "submit", ); // set home as 'index', but can be changed based of the home uri
	foreach ($directories as $folder){
		$active[$folder] = ($directory == $folder)? 'class="active"' : '';
		
	}
	
	if ($active['index'] != '')
	{
		$active['index'] = 'active';
	}
?>
<div id="nav_header">
	<div class="container">
		<div class="circle <?php echo "${active['index']}"?>">
			<a id="logo" href="/">
				<img src= "/img/sfff_logo.png">
			</a>
		</div>
		<ul id="nav">
			<li><a <?php echo "${active['about']}" ?>href="/about">About</a></li>
			<li><a <?php echo "${active['submit']}" ?>href="/submit">Submit Your Film</a></li>
			<li><a <?php echo "${active['contact']}" ?>href="/contact">Contact</a></li>
			<li><a <?php echo "${active['sponsors']}" ?>href="/sponsors">Sponsors</a></li>
		</ul>
		<div class="social-media">
			<a href="https://facebook.com/saltflatsfilmfestival">
				<i class="fa fa-facebook-square fa-2x"></i>
			</a>
			<a href="https://twitter.com/saltflatsfilms">
				<i class="fa fa-twitter-square fa-2x"></i>
			</a>
		</div>
	</div>
</div>
