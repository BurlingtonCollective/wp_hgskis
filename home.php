<?php
include_once('includes/header.php');
?>
<section id="banner">
	<div id="banner-carousel" class="carousel slide">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
	    <li data-target="#banner-carousel" data-slide-to="1"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="images/temp/banner-img.png" alt="hg skis" class="img-responsive" style="margin: 0 auto;">
	    </div>
	    <div class="item">
	    	<div class="video-wrapper" data-fitvids-target>
	    		<iframe src="//player.vimeo.com/video/48325397" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	    	</div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#banner-carousel" role="button" data-slide="prev">
	  	<span></span>
	    <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
	  </a>
	  <a class="right carousel-control" href="#banner-carousel" role="button" data-slide="next">
	    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	    <span></span>
	  </a>
	</div>
</section>
<section id="home-featured">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="featured-block left">
					<h3>Featured Products <small class="pull-right"><a href="javascript:void(0)">view all products</a></small></h3>
					<div class="row">
						<div class="col-xs-6">
							<img class="img-responsive" src="http://placehold.it/800x600&amp;text=Aspect+2:3+-+min-width:+800">
						</div>
						<div class="col-xs-6">
							<img class="img-responsive" src="http://placehold.it/800x600&amp;text=Aspect+2:3+-+min-width:+800">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="featured-block right">
					<h3>Latest News <small class="pull-right"><a href="javascript:void(0)">view all news</a></small></h3>
					<div class="row">
						<div class="col-xs-6">
							<img class="img-responsive" src="http://placehold.it/800x600&amp;text=Aspect+2:3+-+min-width:+800">
						</div>
						<div class="col-xs-6">
							<img class="img-responsive" src="http://placehold.it/800x600&amp;text=Aspect+2:3+-+min-width:+800">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="email-capture">
	<div class="container">
		<div class="row">
			<div class="col-xs-7">
				<h3>Keep up with the East Coast's Finest</h3>
			</div>
			<div class="col-xs-5">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="your email here">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">Cheers</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php
include_once('includes/footer.php');
?>