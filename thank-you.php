<?php
/*
Template Name: Thank You Page
*/
include_once('includes/header.php');
if(have_posts()) : while(have_posts()) : the_post();
?>
<section class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<div class="page-heading">
					<h1>Thank You</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="interior">
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<?php the_content(); ?>
			</div>
			<div id="sidebar" class="hidden-xs col-sm-4 col-md-3 col-md-push-1">
				<?php
					$adLink = get_post_meta(2111, 'wpcf-detail-ad-link', true);
					$external = strpos($adLink, 'hgskis.com') !== false;
				?>
				<a href="<?= $adLink; ?>" <?= $external ? 'target="_blank"': ''; ?>>
					<img class="img-responsive ad" src="<?= get_template_directory_uri(); ?>/images/blogads/queen-city.jpg">
				</a>
				<h4>Categories</h4>
				<ul class="nav nav-stacked">
					<?php
					$videoCat = get_category_by_slug('video');
					$photoCat = get_category_by_slug('photo');
					?>
					<li><a href="<?= get_category_link($videoCat->term_id); ?>"><?= $videoCat->name; ?></a></li>
					<li><a href="<?= get_category_link($photoCat->term_id); ?>"><?= $photoCat->name; ?></a></li>
				</ul>
				<h4>Archive</h4>
				<ul class="nav nav-stacked">
					<?php wp_get_archives(array('limit'=>8)); ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>