<?php
include_once('includes/header.php');
global $post; setup_postdata($post); ?>
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<article>
					<div class="heading">
						<h3><?php the_title(); ?></h3>
						<span class="date"><?php the_date(); ?></span>
					</div>
					<div class="content">
						<div class="wysiwyg-content" data-fitfids-target>
							<?php the_field('video-embed'); ?>
							<?php the_content(); ?>
						</div>
					</div>
				</article>
			</div>
			<div id="sidebar" class="hidden-xs col-sm-4 col-md-3 col-md-push-1">
				<?php
					$adLink = get_post_meta(2340, 'wpcf-detail-ad-link', true);
					$external = strpos($adLink, 'hgskis.com') === false;
				?>
				<a href="<?= $adLink; ?>" <?= $external ? 'target="_blank"': ''; ?>>
					<img class="img-responsive ad" src="http://hgskis.com/wp-content/uploads/2015/10/TALLT_FEATURED_BANNER_ROLLOVER.jpg">
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
					<?php wp_get_archives(array()); ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php
include_once('includes/footer.php');
?>
