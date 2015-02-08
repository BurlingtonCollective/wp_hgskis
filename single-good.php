<?php
/*
Template Name: Goods Detail Page
*/
include_once('includes/header.php');
if (have_posts()) : while (have_posts()) : the_post();
?>
<section class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><a href="http://hgskis.com/?page_id=2105">&larr; Back</a></h1>
			</div>
		</div>
	</div>
</section>
<section id="product">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<?php
				$mainImg = types_render_field('main-image', array('class'=>'img-responsive'));
				$altImg = types_render_field('alt-good-view', array('class'=>'img-responsive show-hover'));
				$slideshowImagesRaw = types_render_field('good-slide-image', array('output'=>'raw'));
				$slideshowImages = explode(' ', $slideshowImagesRaw);
				$vimeoEmbed = types_render_field('good-vimeo-embed', array('output'=>'raw'));
				?>
				<div class="product-wrapper <?= !empty($altImg) ? 'switcheroo' : '';?>">
					<?php if(!empty($altImg)):?>
					<h5 class="view-label">Rollover for Back</h5>
					<?php endif; ?>
					<?php echo $mainImg; echo $altImg; ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="description-wrapper">
					<h2><?php the_title(); ?></h2>
					<?php the_content();
					?>
					<span class="price"><?= types_render_field('price', array()); ?></span>
					<?php
					echo types_render_field('paypal-form', array('output'=>'raw')); 
					?>
					<div class="wysiwyg-content additional">
						<?php
						echo types_render_field('additional-information', array());
						?>
					</div>
					<?php if(!empty($vimeoEmbed)): ?>
					<div class="embed" data-fitvids-target>
						<?= $vimeoEmbed; ?>
					</div>
					<?php
					endif;
					?>
					<?php if(!empty($slideshowImagesRaw)): ?>
					<div id="good-carousel" class="carousel slide">
						<ol class="carousel-indicators">
					  	<?php
					  	$indicatorActive = true;
					  	$indicatorIndex = 0;
					  	while($indicatorIndex <= count($slideshowImages)-1):
					  	?>
					    <li data-target="#good-carousel" data-slide-to="<?= $indicatorIndex; ?>" class="<?= $indicatorActive ? 'active' : '';?>"></li>
					    <?php
					    $indicatorIndex++;
					    $indicatorActive = false;
					    endwhile;
					    ?>
					  </ol>
					  <div class="carousel-inner">
						  <?php
						  $slideActive = true;
						  $slideIndex = 0;
						  while($slideIndex <= count($slideshowImages)-1):
						  ?>
							<div class="item <?= $slideActive ? 'active' : ''; ?>">
								<img class="img-responsive" src="<?= $slideshowImages[$slideIndex]; ?>">
							</div>
							<?php
							$slideIndex++;
							$slideActive = false;
							endwhile;
							?>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#good-carousel" role="button" data-slide="prev">
					    <span></span>
					  </a>
					  <a class="right carousel-control" href="#good-carousel" role="button" data-slide="next">
					    <span></span>
					  </a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>