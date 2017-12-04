<?php
/*
Template Name: Home Page
*/
include_once('includes/header.php');
if (have_posts()) : while (have_posts()) : the_post();
  $slideshowImagesRaw = types_render_field( "slide-image", array('output'=>'raw'));
  $slideshowImages = explode(' ', $slideshowImagesRaw);
?>
<section id="banner">
	<div id="banner-carousel" class="carousel slide">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	<?php
	  	$indicatorActive = true;
	  	$indicatorIndex = 0;
	  	while($indicatorIndex <= count($slideshowImages)-1):
	  	?>
	    <li data-target="#banner-carousel" data-slide-to="<?= $indicatorIndex; ?>" class="<?= $indicatorActive ? 'active' : '';?>"></li>
	    <?php
	    $indicatorIndex++;
	    $indicatorActive = false;
	    endwhile;
	    ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	  	<?php
	  	$slideActive = true;
	  	$slideIndex = 0;
	  	while($slideIndex <= count($slideshowImages)-1):
	  	?>
	    <div class="item <?= $slideActive ? 'active' : ''; ?>">
	    	<?php
	    	$slideLink = types_render_field("slide-target", array('index'=>$slideIndex, 'output'=>'raw'));
	    	if($slideLink && $slideLink != 'override'):
	    		if(strpos($slideLink, 'hgskis.com') === false){
	    			$external = true;
	    		}else{
	    			$external = false;
	    		}
	    	?>
	    	<a href="<?= $slideLink; ?>" <?= $external === true ? 'target="_blank"' : ''; ?>>
	    		<?= types_render_field("slide-image", array('index'=>$slideIndex)); ?>
	    	</a>
	    	<?php
	    	else:
    		types_render_field("slide-image", array('index'=>$slideIndex));
	    	endif;
	    	?>
	    </div>
	    <!-- <div class="item">
	    	<div class="video-wrapper" data-fitvids-target>
	    		<iframe src="//player.vimeo.com/video/48325397" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	    	</div>
	    </div> -->
	    <?php
	    $slideIndex++;
	    $slideActive = false;
	    endwhile;
	    ?>
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
<!-- <section id="home-featured">
	<div class="container">
		<div class="row">

		</div>
	</div>
</section> -->
<?php
$homeMountainImg = types_render_field('home-mountain', array('class'=>'img-responsive', 'style' => 'max-width: 200px; margin: 0 auto;'));
$homeMountainLink = types_render_field('home-mountain-link', array('output'=>'raw'));
if ($homeMountainImg) : ?>
	<section id="home-mountain">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
					<?php if ($homeMountainLink) : ?>
						<a href="<?php echo $homeMountainLink; ?>" target="_blank">
							<?php echo $homeMountainImg; ?>
						</a>
					<?php else :
						echo $homeMountainImg;
					endif; ?>
					<span class="home-mountain">Home Mountain of HG Skis</span>
				</div>
			</div>
		</div>
	</section>
	<?php
endif; ?>
<section id="email-capture">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-7">
				<h3>Keep up with the East Coast's Finest</h3>
			</div>
			<div class="col-xs-12 col-sm-5">
				<form action="//hgskis.us5.list-manage.com/subscribe/post-json?u=810ab4864dd3bebc3a59b701b&amp;id=77d981dbf1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form">
					<div class="input-group">
						<input type="email" name="EMAIL" class="form-control" placeholder="your email here" id="email-capture-field">
						<span class="input-group-btn">
							<button name="subscribe" class="btn btn-default" type="submit">Cheers</button>
						</span>
					</div>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;"><input type="text" name="b_810ab4864dd3bebc3a59b701b_77d981dbf1" tabindex="-1" value="" id="gotcha"></div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>
