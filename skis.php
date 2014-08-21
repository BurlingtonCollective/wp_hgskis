<?php
/*
Template Name: Skis Page
*/
include_once('includes/header.php');
if (have_posts()) : while (have_posts()) : the_post();
?>
<section class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Park</h1>
			</div>
		</div>
	</div>
</section>
<section id="product">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="row">
					<div class="col-xs-6">
						<div class="product-wrapper">
							<h5 class="view-label">Topsheets</h5>
							<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/stinger/topsheet.png">
							<img class="img-responsive show-hover" src="<?= get_template_directory_uri(); ?>/images/stinger/base.png">
						</div>
					</div>
					<div class="col-xs-6" style="text-align: center;">
						<h5 class="view-label">Profile View</h5>
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/stinger/profile.png" style="margin: 20px auto 0;">
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="description-wrapper">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?= get_post_meta(get_the_ID(), 'ski_paypal_embed', true); ?>
					<h3>Dimensions</h3>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Length</td>
								<td>169cm</td>
								<td>178cm</td>
							</tr>
							<tr>
								<td>Tip - Waist - Tail</td>
								<td>123 - 96 - 123mm</td>
								<td>125 - 96 - 125mm</td>
							</tr>
							<tr>
								<td>Turning Radius</td>
								<td>18m</td>
								<td>18m</td>
							</tr>
							<tr>
								<td>Camber</td>
								<td>12m</td>
								<td>12m</td>
							</tr>
						</tbody>
					</table>
					<h3>Features</h3>
					<ul class="nav nav-tabs nav-justified">
						<li class="active"><a href="#tab-0" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/flexin.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/flexin-rollover.png"></a></li>
						<li><a href="#tab-1" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/pop.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/pop-rollover.png"></a></li>
						<li><a href="#tab-2" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/mona.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/mona-rollover.png"></a></li>
						<li><a href="#tab-3" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/sidewall.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/sidewall-rollover.png"></a></li>
						<li><a href="#tab-4" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/no-delam.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/no-delam-rollover.png"></a></li>
						<li><a href="#tab-5" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/base.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/base-rollover.png"></a></li>
						<li><a href="#tab-6" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/fatty-edges.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/fatty-edges-rollover.png"></a></li>
						<li><a href="#tab-7" data-toggle="tab"><img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/symmetrical.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/symmetrical-rollover.png"></a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab-0">
							<h5>Advanced Flex Profile</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="tab-pane fade" id="tab-1">
							<h5>Tab 2</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="tab-pane fade" id="tab-2">
							<h5>Tab 3</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="tab-pane fade" id="tab-3">
							<h5>Tab 4</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="tab-pane fade" id="tab-4">
							<h5>Tab 5</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="tab-pane fade" id="tab-5">
							<h5>Tab 6</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="tab-pane fade" id="tab-6">
							<h5>Tab 7</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="tab-pane fade" id="tab-7">
							<h5>Tab 8</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
					</div>
					<div id="product-slider" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#product-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#product-slider" data-slide-to="1"></li>
					    <li data-target="#product-slider" data-slide-to="2"></li>
					    <li data-target="#product-slider" data-slide-to="3"></li>
					    <li data-target="#product-slider" data-slide-to="4"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="<?= get_template_directory_uri(); ?>/images/stinger/Stinger-photos1.jpg" alt="...">
					    </div>
					    <div class="item">
					      <img src="<?= get_template_directory_uri(); ?>/images/stinger/Stinger-photos2.jpg" alt="...">
					    </div>
					    <div class="item">
					      <img src="<?= get_template_directory_uri(); ?>/images/stinger/Stinger-photos3.jpg" alt="...">
					    </div>
					    <div class="item">
					      <img src="<?= get_template_directory_uri(); ?>/images/stinger/Stinger-photos4.jpg" alt="...">
					    </div>
					    <div class="item">
					      <img src="<?= get_template_directory_uri(); ?>/images/stinger/Stinger-photos5.jpg" alt="...">
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#product-slider" role="button" data-slide="prev">
					    <span></span>
					  </a>
					  <a class="right carousel-control" href="#product-slider" role="button" data-slide="next">
					    <span></span>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>