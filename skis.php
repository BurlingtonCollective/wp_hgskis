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
			<div class="col-xs-12 col-sm-6">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="product-wrapper switcheroo">
							<h5 class="view-label"><strong class="visible-xs">Stinger </strong><span>Topsheet</span><span class="show-hover">Base</span><i>Rollover for Base</i><i class="show-hover">Rollover for Topsheet</i></h5>
							<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/stinger/topsheet.png">
							<img class="img-responsive show-hover" src="<?= get_template_directory_uri(); ?>/images/stinger/base-cropped.png">
						</div>
					</div>
					<div class="hidden-xs hidden-sm col-md-6" style="text-align: center;">
						<h5 class="view-label">Profile View</h5>
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/stinger/profile.png" style="margin: 20px auto 0;">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="description-wrapper">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<span class="strikethrough"><span>$599.00</span></span>
					<span class="price">$499.00</span>
					<?= get_post_meta(get_the_ID(), 'ski_paypal_embed', true); ?>
					<h3>Dimensions</h3>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Length</td>
								<td>169 cm</td>
								<td>178 cm</td>
							</tr>
							<tr>
								<td>Tip - Waist - Tail</td>
								<td>123 - 96 - 123 mm</td>
								<td>125 - 96 - 125 mm</td>
							</tr>
							<tr>
								<td>Turning Radius</td>
								<td>18 m</td>
								<td>18 m</td>
							</tr>
							<tr>
								<td>Camber</td>
								<td>12 mm</td>
								<td>12 mm</td>
							</tr>
						</tbody>
					</table>
					<h3>Technology</h3>
					<div class="panel-group" id="technology">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-0" class="open" data-toggle="collapse" data-parent="#technology">
										<img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/flexin.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/flexin-rollover.png">
										<span>Popeye Flex</span>
										<i class="glyphicon glyphicon-chevron-down"></i>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse in" id="panel-0">
								<div class="panel-body">
									<ul>
										<li>Balanced flex profile for maximum control.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-1" data-toggle="collapse" data-parent="#technology">
										<img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/mona.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/mona-rollover.png">
										<span>Art Attack</span>
										<i class="glyphicon glyphicon-chevron-down"></i>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="panel-1">
								<div class="panel-body">
									<ul>
										<li>People will line up to see your skis.</li>
										<li>Hand painted graphic from skiers like you.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-2" data-toggle="collapse" data-parent="#technology">
										<img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/sidewall.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/sidewall-rollover.png">
										<span>8th Wonder Sidewall</span>
										<i class="glyphicon glyphicon-chevron-down"></i>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="panel-2">
								<div class="panel-body">
									<ul>
										<li>Side wall geometry that holds edge pressure, not snow buildup.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-3" data-toggle="collapse" data-parent="#technology">
										<img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/no-delam.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/no-delam-rollover.png">
										<span>Zero-Delam</span>
										<i class="glyphicon glyphicon-chevron-down"></i>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="panel-3">
								<div class="panel-body">
									<ul>
										<li>Your tips won't explode when you get to know the gucci plateau.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-4" data-toggle="collapse" data-parent="#technology">
										<img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/base.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/base-rollover.png">
										<span>Double Base</span>
										<i class="glyphicon glyphicon-chevron-down"></i>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="panel-4">
								<div class="panel-body">
									<ul>
										<li>Party on Wayne.</li>
										<li>Our bases are double the industry standard thinkness, twice as thick and twice as strong.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-5" data-toggle="collapse" data-parent="#technology">
										<img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/fatty-edges.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/fatty-edges-rollover.png">
										<span>Fat Edges</span>
										<i class="glyphicon glyphicon-chevron-down"></i>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="panel-5">
								<div class="panel-body">
									<ul>
										<li>Twice the industry standard thinkness, so you can slam em' hard.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panel-6" data-toggle="collapse" data-parent="#technology">
										<img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/symmetrical.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/symmetrical-rollover.png">
										<span>Symmetric Design</span>
										<i class="glyphicon glyphicon-chevron-down"></i>
										<i class="glyphicon glyphicon-chevron-right"></i>
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="panel-6">
								<div class="panel-body">
									<ul>
										<li>It's cool to ski backwards.</li>
										<li>Fully symmetric ski - feels like freedom.</li>
									</ul>
								</div>
							</div>
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