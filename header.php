<?php
	$directory = ltrim($_SERVER['PHP_SELF'],'/');
	$directory = rtrim($directory,'.php');
	$directories = array("index","about","contact","sponsors", "submit", "events-and-awards" ); // set home as 'index', but can be changed based of the home uri
	foreach ($directories as $folder){
		$active[$folder] = ($directory == $folder)? 'class="active"' : '';
		
	}
	$more = '';
	if ($directory ==='events-and-awards' || $directory === 'people')
	{
		$more = 'active';
	}
	
	if ($active['index'] != '')
	{
		$active['index'] = 'active';
	}
?>
<!-- <div id="nav_header">
	<div class="container">
		<div class="menu">
			<button class="menu-button">
				<i class="fa fa-bars fa-2x"></i>
			</button>
		</div>
		<div class="circle <?php echo "${active['index']}"?>">
			<a id="logo" href="/">
				<img src= "/img/sfff_logo.png">
			</a>
		</div>
		<div id="nav">
			<ul>
				<li><a <?php echo "${active['about']}" ?>href="/about">About</a></li>
				<li><a <?php echo "${active['submit']}" ?>href="/submit">Submit Your Film</a></li>
				<li><a <?php echo "${active['sponsors']}" ?>href="/sponsors">Sponsors</a></li>
				<li><a <?php echo "${active['contact']}" ?>href="/contact">Contact</a></li>
			</ul>
		</div>
		<div class="social-media">
			<a href="https://facebook.com/saltflatsfilmfestival">
				<i class="fa fa-facebook-square fa-2x"></i>
			</a>
			<a href="https://twitter.com/saltflatsfilms">
				<i class="fa fa-twitter-square fa-2x"></i>
			</a>
		</div>
	</div>
</div> -->
<div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <div class="btn-menu">
			  <button type="button" class="navbar-toggle list-unstyled collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
          </div>
          <div class="circle <?php echo "${active['index']}"?>">
			<a id="logo" href="/">
				<img src= "/img/sfff_logo.png">
			</a>
		</div>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          	<li><a <?php echo "${active['about']}" ?>href="/about">About</a></li>
			<li><a <?php echo "${active['submit']}" ?>href="/submit">Submit Your Film</a></li>
			<li><a <?php echo "${active['sponsors']}" ?>href="/sponsors">Sponsors</a></li>
			<li><a <?php echo "${active['contact']}" ?>href="/contact">Contact</a></li>
			<li class="dropdown">
				  <a  class="<?php echo "${more}" ?> dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a <?php echo "${active['events-and-awards']}" ?>href="/events-and-awards">Events And Awards</a></li>
				</ul>
            </li>
		  </ul>
        </div><!-- /.nav-collapse -->
        <div class="social-media">
			<a href="https://facebook.com/saltflatsfilmfestival">
				<i class="fa fa-facebook-square fa-2x"></i>
			</a>
			<a href="https://twitter.com/saltflatsfilms">
				<i class="fa fa-twitter-square fa-2x"></i>
			</a>
		</div>
      </div><!-- /.container -->
</div><!-- /.navbar -->

