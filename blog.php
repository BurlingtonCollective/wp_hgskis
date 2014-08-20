<?php
/*
Template Name: Media Page
*/
include_once('includes/header.php');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$media = new WP_Query('posts_per_page=5&paged='+$paged);
?>
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<?php
				if($media->have_posts()): while($media->have_posts()): $media->the_post();
				$categories = wp_get_post_categories(get_the_ID(), array('fields'=>'slugs'));
				$vimeo_embed = get_post_meta(get_the_ID(), 'vimeo_embed', true);
				?>
				<article>
					<div class="heading">
						<h3><?php the_title(); ?></h3>
						<span class="date">08/08/2014</span>
					</div>
					<div class="content">
						<div class="wysiwyg-content">
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
				<ul class="pager">
				  <li class="previous"><?php previous_posts_link( '&larr; Previous Entries' ); ?></li>
				  <li class="next"><?php next_posts_link( 'Next Entries &rarr;', '' ); ?></li>
				</ul>
			</div>
			<div id="sidebar" class="col-xs-3 col-xs-push-1">
				<img class="img-responsive ad" src="<?= get_template_directory_uri(); ?>/images/blogads/vermonts-finest.jpg">
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
include_once('includes/footer.php');
?>