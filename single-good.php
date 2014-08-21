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
				<h1><a href="javascript:history.back()">&larr; Back</a></h1>
			</div>
		</div>
	</div>
</section>
<section id="product">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<?php
				$mainImg = types_render_field('main-image', array('class'=>'img-responsive'));
				$altImg = types_render_field('alt-good-view', array('class'=>'img-responsive show-hover'));
				error_log($altImg);
				?>
				<div class="product-wrapper <?= !empty($altImg) ? 'switcheroo' : '';?>">
					<h5 class="view-label">Rollover for Back</h5>
					<?php echo $mainImg; echo $altImg; ?>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="description-wrapper">
					<h2><?php the_title(); ?></h2>
					<?php the_content();
					echo types_render_field('paypal-form', array('output'=>'raw')); 
					echo types_render_field('additional-information', array());
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>