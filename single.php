<?php
include_once('includes/header.php');
?>
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<?php
				if(have_posts()): while(have_posts()): the_post();
				$categories = wp_get_post_categories(get_the_ID(), array('fields'=>'slugs'));
				$vimeo_embed = get_post_meta(get_the_ID(), 'vimeo_embed', true);
				?>
				<article>
					<div class="heading">
						<h3><?php the_title(); ?></h3>
						<span class="date"><?php the_date(); ?></span>
					</div>
					<div class="content">
						<div class="wysiwyg-content" data-fitvids-target>
							<?php the_content(); ?>
						</div>
						<!-- <a href="<?php the_permalink(); ?>">read more ...</a> -->
						<?php
						if(in_array('video', $categories)): ?>
						<div class="embed" data-fitvids-target>
							<?=  $vimeo_embed; ?>
						</div>
						<?php
						elseif(in_array('photo', $categories)): ?>
						<div class="image-wrapper">
							<?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
						</div>
						<?php
						endif;
						?>
					</div>
				</article>
				<?php
				endwhile; endif;
				?>
				<div class="social-container">
					<h3>Share</h3>
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_email_large' displayText='Email'></span>
				</div>
				<ul class="pager" style="clear: both;">
					<?php
					$nextPost = get_next_post();
					$prevPost = get_previous_post();
					?>
				  <li class="previous"><a href="<?= get_permalink($nextPost->ID); ?>">&larr; Previous Title</a></li>
				  <li class="next"><a href="<?= get_permalink($prevPost->ID); ?>">Next Title &rarr;</a></li>
				</ul>
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