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
				<h1>HG Skis 2015 Arsenal</h1>
			</div>
		</div>
	</div>
</section>
<section id="product">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h2>Stinger</h2>
				<a href="/?page_id=2338">
					<img class="img-responsive" src="http://hgskis.com/wp-content/uploads/2015/04/Stinger.jpg">
				</a>
			</div>
			<div class="col-xs-6">
				<h2>EL</h2>
				<a href="/?page_id=2818">
					<img class="img-responsive" src="http://hgskis.com/wp-content/uploads/2015/04/El.jpg">
				</a>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>