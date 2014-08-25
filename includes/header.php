<!DOCTYPE html>
<html>
<head>
	<title>HG Skis</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Ek+Mukta:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/master.css">
</head>
<body>

	<header>
		<nav id="main-nav">
			<a href="<?= get_home_url(); ?>" class="brand centered">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/logo.png" style="margin-top: -18px;">
			</a>
			<button type="button" id="mobile-nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-collapse-target">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div id="mobile-collapse-target" class="container collapse no-transition">
				<ul class="main-nav nav-left">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main_nav_left',
						'items_wrap' => '%3$s',
						'container' => false
					));
					?>
				</ul>
				<ul class="main-nav nav-right">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main_nav_right',
						'items_wrap' => '%3$s',
						'container' => false
					));
					?>
				</ul>
			</div>
		</nav>
		<?php if(is_page_template('about.php')): ?>
		<nav id="sub-nav">
			<div class="container" id="scrollspy">
				<ul class="nav nav-pills nav-justified">
					<li><a href="#about" class=""><span>About</span></a></li>
					<li><a href="#contact" class=""><span>Contact</span></a></li>
					<li><a href="#history" class=""><span>History</span></a></li>
					<li><a href="#retailers" class=""><span>Retailers</span></a></li>
					<li><a href="#warranty" class=""><span>Warranty</span></a></li>
				</ul>
			</div>
		</nav>
		<?php endif; ?>
	</header>