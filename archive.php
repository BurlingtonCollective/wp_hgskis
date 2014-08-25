<?php
include_once('includes/header.php');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$media = new WP_Query(array('posts_per_page'=>5,'paged'=>$paged));
?>
<section class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-heading">
					<h1><?php printf(__('Monthly Archives: %s', 'shape'), get_the_date()); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
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
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="date"><?php the_date(); ?></span>
					</div>
					<div class="content">
						<div class="wysiwyg-content">
							<?php 
							$content = apply_filters( 'the_content', get_the_content() );
							$content = str_replace( ']]>', ']]&gt;', $content );
							$startPosition = strripos($content,'</p>');
							if($startPosition !== false){
								$stringLength = 4;
								$content = substr_replace($content, $replacement, $startPosition, $stringLength);
								$replacement = '  <a href="'.get_the_permalink().'">read more...</a></p>';
							}else{
								$content .= '<p><a href="'.get_the_permalink().'">read more ...</a></p>';
							}
							echo $content;
							?>
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
				  <li class="previous"><?php next_posts_link( '&larr; Older Titles', $media->max_num_pages); ?></li>
				  <li class="next"><?php previous_posts_link( 'Newer Titles &rarr;'); ?></li>
				</ul>
			</div>
			<div id="sidebar" class="hidden-xs col-sm-4 col-md-3 col-md-push-1">
				<?php
					$adLink = get_post_meta(2111, 'wpcf-overview-ad-link', true);
					$external = strpos($adLink, 'hgskis.com', 0) !== false;
				?>
				<a href="<?= $adLink; ?>" <?= $external ? 'target="_blank"': ''; ?>>
					<img class="img-responsive ad" src="<?= get_template_directory_uri(); ?>/images/blogads/vermonts-finest.jpg">
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
include_once('includes/footer.php');
?>