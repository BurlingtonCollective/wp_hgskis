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
				<h1>HG Skis 15/16 Arsenal <span class="pull-right" style="color: #1d621a; text-transform: uppercase;">Pre-order now open - 1 Week Only</span></h1>
			</div>
		</div>
	</div>
</section>
<section id="product" class="overview" style="padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="wrapper wrapper-left">
					<h2 style="text-align: right; font-size: 22px; line-height: 37px;"><img class="img-responsive pull-left" src="<?= get_template_directory_uri(); ?>/images/stinger/title-logo.png" alt="Stinger">Full Camber Park Ski</h2>
					<a href="http://hgskis.com/?page_id=2338" style="display: block; padding-top: 20px;">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/stinger/2015/topsheet-horz.png">
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="wrapper wrapper-right">
					<h2 style="text-align: right; font-size: 22px; line-height: 37px;"><img class="img-responsive pull-left" style="margin-top: -20px;" src="<?= get_template_directory_uri(); ?>/images/el/title-logo.png" alt="EL">Rockered Powder Ski</h2>
					<a href="http://hgskis.com/?page_id=2815" style="display: block; padding-top: 20px;">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/el/topsheet-horz.png">
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