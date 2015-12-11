<?php
/*
Template Name: Preorder 2015 Skis
*/
include_once('includes/header.php');
if (have_posts()) : while (have_posts()) : the_post();
?>
<section class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>HG Skis 15/16 Arsenal <span class="pull-right" style="color: #1d621a; text-transform: uppercase;">Pre-order now open</span></h1>
			</div>
		</div>
	</div>
</section>
<section id="product" class="overview" style="padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="wrapper wrapper-left">
					<h2 style="text-align: right; font-size: 18px;"><img class="img-responsive pull-left" src="<?= get_template_directory_uri(); ?>/images/stinger/title-logo.png" alt="Subway Stinger"><span style="display: block; font-size: 12px; line-height: 14px; margin-bottom: 6px;">Subway Stinger</span>Full Camber Park Ski (178cm)</h2>
					<a href="http://hgskis.com/?page_id=2338" style="display: block; padding-top: 20px;">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/stinger/2015/topsheet-horz.png">
					</a>
				</div>
				<div class="wrapper wrapper-left">
					<h2 style="text-align: right; font-size: 18px;"><img class="img-responsive pull-left" src="<?= get_template_directory_uri(); ?>/images/stinger/2015/spitfire/logo.png" alt="Spitfire Stinger"><span style="display: block; font-size: 12px; line-height: 14px; margin-bottom: 6px;">Spitfire Stinger</span>Full Camber Park Ski (169cm)</h2>
					<a href="http://hgskis.com/?page_id=2839" style="display: block; padding-top: 20px;">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/stinger/topsheet-horz.png">
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="wrapper wrapper-right">
					<h2 style="text-align: right; font-size: 18px; line-height: 37px;"><img class="img-responsive pull-left" style="margin-top: -20px;" src="<?= get_template_directory_uri(); ?>/images/el/title-logo.png" alt="EL">Rockered Powder Ski (182cm)</h2>
					<a href="http://hgskis.com/?page_id=2815" style="display: block; padding-top: 20px;">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/el/topsheet-horz.png">
					</a>
				</div>
				<div class="wrapper wrapper-right">
					<h2 style="text-align: right; font-size: 18px;"><img class="img-responsive pull-left" src="<?= get_template_directory_uri(); ?>/images/tall-t/logo.png" alt="Tall T Safari"><span style="display: block; font-size: 12px; line-height: 14px; margin-bottom: 6px;">Tall T Safari</span>Full Camber Park Ski (178cm)</h2>
					<a href="http://hgskis.com/?page_id=2866" style="display: block; padding-top: 20px;">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/tall-t/saffari-horz.png">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>