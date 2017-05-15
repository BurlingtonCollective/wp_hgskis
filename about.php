<?php
/*
Template Name: About Page
*/
include_once('includes/header.php');
if(have_posts()) : while(have_posts()) : the_post();
?>
<section id="banner">
	<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/about-banner-new-logo.jpg" style="margin: 0 auto;">
</section>
<section id="about" class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>About</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/jim-gaeta-gibson.png" style="margin: 0 auto;">
			</div>
			<div class="col-xs-6 col-sm-6">
				<div class="wysiwyg-content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="hidden-xs col-sm-3">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/the-genny-struggle.png" style="margin: 0 auto;">
			</div>
		</div>
	</div>
</section>
<section id="contact" class="heading" style="margin-top:10px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-heading">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="about-inner address">
					<div class="icon">
						<i class="glyphicon glyphicon-map-marker"></i>
					</div>
					<div class="content">
						<?php the_field('company_contact_address'); ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="about-inner">
					<div class="icon">
						<!-- <i class="glyphicon glyphicon-envelope"></i> -->
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/social/email-dark.png">
					</div>
					<div class="content">
						<a href="https://goo.gl/forms/oo2It2FIGJXaGZj52">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="about-inner">
					<div class="icon">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/sticker-icon.png">
					</div>
					<div class="content">
						<span>Send us a self addressed and stamped envelope and then we'll send you stickers back!</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
if (get_field('company_history_copy')) : ?>
<section id="history" class="heading" style="margin-top:10px;">
	<div class="container">
		<div class="row" class="page-heading">
			<div class="col-xs-12">
				<div class="page-heading">
					<h1>History</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div>
					<img class="hidden-xs hidden-sm" src="<?= get_template_directory_uri(); ?>/images/history-polaroids/top-alt.png" style="float: right; margin: 0px -40px 0 0;"><img class="hidden-xs hidden-sm" src="<?= get_template_directory_uri(); ?>/images/history-polaroids/middle-alt.png" style="float: right; margin: 0px -40px 0 0;"><img class="hidden-xs hidden-sm" src="<?= get_template_directory_uri(); ?>/images/history-polaroids/bottom-alt.png" style="float: right; margin: 0px -40px 0 0;">
					<?php the_field('company_history_copy'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
endif;
if (get_field('company_warranty_copy')) : ?>
<section id="warranty" class="heading" style="margin-top:10px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-heading">
					<h1>Warranty</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<?php the_field('company_warranty_copy'); ?>
			</div>
		</div>
	</div>
</section>
<?php
endif;
if (have_rows('company_sections')) : foreach (get_field('company_sections') as $index => $section) :
	if ($section['company_section_title']) : ?>
		<section <?php echo $index === 0 ? 'id="more"' : ''; ?> class="heading" style="margin-top: 10px">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-heading">
							<h1><?php echo $section['company_section_title']; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	endif;
	if ($section['company_section_copy']) : ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<?php echo $section['company_section_copy']; ?>
					</div>
				</div>
			</div>
		</section>
		<?php
	endif;
endforeach; endif;
endwhile; endif;
include_once('includes/footer.php');
?>
