<?php
/*
Template Name: Media Page
*/
include_once('includes/header.php');
?>
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<article>
					<div class="heading">
						<h3>Title</h3>
						<span class="date">08/08/2014</span>
					</div>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <a href="javascript:void(0)">read more ...</a></p>
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/temp/blog-placeholder.png">
					</div>
				</article>
				<article>
					<div class="heading">
						<h3>Title</h3>
						<span class="date">08/08/2014</span>
					</div>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <a href="javascript:void(0)">read more ...</a></p>
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/temp/blog-placeholder.png">
					</div>
				</article>
				<article>
					<div class="heading">
						<h3>Title</h3>
						<span class="date">08/08/2014</span>
					</div>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <a href="javascript:void(0)">read more ...</a></p>
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/temp/blog-placeholder.png">
					</div>
				</article>
				<ul class="pager">
				  <li class="previous"><a href="#">&larr; Older</a></li>
				  <li class="next"><a href="#">Newer &rarr;</a></li>
				</ul>
			</div>
			<div id="sidebar" class="col-xs-3 col-xs-push-1">
				<img class="img-responsive ad" src="<?= get_template_directory_uri(); ?>/images/temp/ad-placeholder.png">
				<h4>Cateories</h4>
				<ul class="nav nav-stacked">
					<li><a href="javascript:void(0)">Video</a></li>
					<li><a href="javascript:void(0)">Trips</a></li>
					<li><a href="javascript:void(0)">Product News</a></li>
					<li><a href="javascript:void(0)">Team News</a></li>
					<li><a href="javascript:void(0)">Photos</a></li>
				</ul>
				<h4>Archive</h4>
				<ul class="nav nav-stacked">
					<li><a href="javascript:void(0)">August 2014</a></li>
					<li><a href="javascript:void(0)">July 2014</a></li>
					<li><a href="javascript:void(0)">June 2014</a></li>
					<li><a href="javascript:void(0)">May 2014</a></li>
					<li><a href="javascript:void(0)">April 2014</a></li>
					<li><a href="javascript:void(0)">March 2014</a></li>
					<li><a href="javascript:void(0)">February 2014</a></li>
					<li><a href="javascript:void(0)">January 2014</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php
include_once('includes/footer.php');
?>