<?php
/*
Template Name: Media Page
*/
include_once('includes/header.php');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$videoCategories = get_terms('video-category');
global $post; setup_postdata($post); ?>
<section id="blog">
	<?php
	if ($paged === 1) : foreach ($videoCategories as $category) :
		$chunks = array_chunk(get_posts(array(
			'post_type' => 'video',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'video-category',
					'field' => 'slug',
					'terms' => $category->slug
				)
			)
		)), 4);
		if ($chunks) : ?>
			<section class="heading">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1><?php echo $category->name; ?></h1>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<?php
				$collapse = false;
				foreach ($chunks as $rowCount => $row) :
					if ($rowCount === 2) :
						$collapse = true; ?>
						<div id="<?php echo $category->slug; ?>-collapse" class="collapse">
						<?php
					endif; ?>
					<div class="row">
						<?php foreach ($row as $post) : setup_postdata($post); ?>
							<div class="col-xs-6 col-md-3 col-video">
								<a href="<?php the_permalink(); ?>">
									<img class="img-responsive" src="<?php the_field('video-thumbnail'); ?>">
								</a>
								<h1 class="h5 text-center">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
							</div>
						<?php endforeach; ?>
					</div>
					<?php
					if ($collapse && count($chunks) === $rowCount + 1) : ?>
						</div>
						<div class="row" style="padding: 20px 0;">
							<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
								<button class="btn btn-block btn-default"
										style="background: black; color: white; border: none; border-radius: 0;"
										data-toggle="collapse"
										data-target="#<?php echo $category->slug; ?>-collapse">
									Show All
								</button>
							</div>
						</div>
						<?php
					endif;
				endforeach; ?>
			</div>
			<?php
		endif;
	endforeach; endif;
	wp_reset_postdata(); ?>
	<section class="heading" style="margin: 40px 0;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Blog</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<?php
				$media = new WP_Query(array('posts_per_page'=>5,'paged'=>$paged));
				if($media->have_posts()): while($media->have_posts()): $media->the_post();
				global $more;
				$more = 0;
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
							// $content = apply_filters( 'the_content', get_the_content() );
							// $content = str_replace( ']]>', ']]&gt;', $content );
							// $startPosition = strripos($content,'</p>');
							// if($startPosition !== false){
							// 	$stringLength = 4;
							// 	$content = substr_replace($content, $replacement, $startPosition, $stringLength);
							// 	$replacement = '  <a href="'.get_the_permalink().'">read more...</a></p>';
							// }else{
							// 	$content .= '<p><a href="'.get_the_permalink().'">read more ...</a></p>';
							// }
							// echo $content;
							$the_content = get_the_content();
							error_log(strripos($post->post_content, '<!--more-->') === false);
							if( strpos( $post->post_content, '<!--more-->' ) ) {
					        error_log('content');
									the_content('Continue reading <span class="meta-nav">&rarr;</span>');
					    }
					    else {
					        error_log('excerpt');
					        the_excerpt();
					    }
							// if( strpos( get_the_content(), 'more-link' ) === false ) {
							// 		error_log('excerpt');
					  //       the_excerpt();
					  //   }
					  //   else {
					  //       error_log('content');
							// 		the_content('Continue reading <span class="meta-nav">&rarr;</span>');
					  //   }
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
					$adLink = get_post_meta(2340, 'wpcf-overview-ad-link', true);
					$external = strpos($adLink, 'hgskis.com', 0) === false;
				?>
				<a href="<?= $adLink; ?>" <?= $external ? 'target="_blank"': ''; ?>>
					<img class="img-responsive ad" src="http://hgskis.com/wp-content/uploads/2015/10/TALLT_FEATURED_BANNER.jpg">
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
