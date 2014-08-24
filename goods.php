<?php
/*
Template Name: Goods Page
*/
include_once('includes/header.php');
?>
<section class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-heading">
					<h1>Softgoods</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="goods">
	<div class="container">
		<div class="row">
			<?php
			$goods = new WP_Query(array('post_type'=>'good', 'posts_per_page'=>-1));
			if($goods->have_posts()): while($goods->have_posts()): $goods->the_post();
			?>
			<div class="col-xs-3">
				<div class="good-wrapper">
					<a href="<?php the_permalink(); ?>">
						<?php
						echo types_render_field('main-image', array('class'=>'img-responsive', 'alt'=>get_the_title()));
						?>
						<h4 style="text-align: center;"><?php the_title();?></h4>
					</a>
				</div>
			</div>
			<?php
			endwhile; endif;
			?>
		</div>
	</div>
</section>
<?php
include_once('includes/footer.php');
?>