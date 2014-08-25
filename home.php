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
<section id="home-featured">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="featured-block left">
					<h3>Featured Products<!-- <small class="pull-right"><a href="javascript:void(0)">view all products</a></small> --></h3>
					<div class="row">
						<div class="col-xs-6">
							<?php
							$featSlot1Link = types_render_field('slot-1-link', array('output'=>'raw'));
							$featSlot1Img = types_render_field('slot-1-image', array('class'=>'img-responsive'));
							if($featSlot1Link){
								if(strpos($featSlot1Link, 'hgskis.com') === false){
									$external = true;
								}else{
									$external = false;
								}
							}
							$featSlot1Rollover = types_render_field('slot-1-rollover', array('class'=>'img-responsive show-hover'));
							?>
							<div class="feature-wrapper">
								<a href="<?= $featSlot1Link; ?>" <?= $external ? 'target="_blank"' : ''; ?>>
									<?php echo $featSlot1Img; echo $featSlot1Rollover; ?>
								</a>
							</div>
						</div>
						<div class="col-xs-6">
							<?php
							$featSlot2Link = types_render_field('slot-2-link', array('output'=>'raw'));
							$featSlot2Img = types_render_field('slot-2-image', array('class'=>'img-responsive'));
							if($featSlot2Link){
								if(strpos($featSlot2Link, 'hgskis.com') === false){
									$external = true;
								}else{
									$external = false;
								}
							}
							$featSlot2Rollover = types_render_field('slot-2-rollover', array('class'=>'img-responsive show-hover'));
							?>
							<div class="feature-wrapper">
								<a href="<?= $featSlot2Link; ?>" <?= $external ? 'target="_blank"' : ''; ?>>
									<?php echo $featSlot2Img; echo $featSlot2Rollover; ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="featured-block right">
					<h3>Latest News<!-- <small class="pull-right"><a href="javascript:void(0)">view all news</a></small> --></h3>
					<div class="row">
						<div class="col-xs-6">
							<?php
							$newsSlot1Link = types_render_field('slot-1-link-news', array('output'=>'raw'));
							$newsSlot1Img = types_render_field('slot-1-image-news', array('class'=>'img-responsive'));
							if($newsSlot1Link){
								if(strpos($newsSlot1Link, 'hgskis.com') === false){
									$external = true;
								}else{
									$external = false;
								}
							}
							$newsSlot1Rollover = types_render_field('slot-1-rollover-news', array('class'=>'img-responsive show-hover'));
							?>
							<div class="feature-wrapper">
								<a href="<?= $newsSlot1Link; ?>" <?= $external ? 'target="_blank"' : ''; ?>>
									<?php echo $newsSlot1Img; echo $newsSlot1Rollover; ?>
								</a>
							</div>
						</div>
						<div class="col-xs-6">
							<?php
							$newsSlot2Link = types_render_field('slot-2-link-news', array('output'=>'raw'));
							$newsSlot2Img = types_render_field('slot-2-image-news', array('class'=>'img-responsive'));
							if($newsSlot2Link){
								if(strpos($newsSlot2Link, 'hgskis.com') === false){
									$external = true;
								}else{
									$external = false;
								}
							}
							$newsSlot2Rollover = types_render_field('slot-2-rollover-news', array('class'=>'img-responsive show-hover'));
							?>
							<div class="feature-wrapper">
								<a href="<?= $newsSlot2Link; ?>" <?= $external ? 'target="_blank"' : ''; ?>>
									<?php echo $newsSlot2Img; echo $newsSlot2Rollover; ?>
								</a>
							</div>
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
			<div class="col-xs-12 col-sm-7">
				<h3>Keep up with the East Coast's Finest</h3>
			</div>
			<div class="col-xs-12 col-sm-5">
				<form action="//hgskis.us5.list-manage.com/subscribe/post?u=810ab4864dd3bebc3a59b701b&amp;id=77d981dbf1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
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