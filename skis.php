<?php
/*
Template Name: Skis Page
*/
include_once('includes/header.php');
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
							<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/product/topsheet.png">
							<img class="img-responsive show-hover" src="<?= get_template_directory_uri(); ?>/images/product/base.png">
						</div>
					</div>
					<div class="col-xs-6">
						<h5 class="view-label">Profile View</h5>
						<!-- <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/product/profile.png"> -->
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="description-wrapper">
					<h2>Stinger</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<span class="price">$599</span>
					<form>
						<button class="btn btn-lg btn-primary" type="submit">Buy Now</button>
					</form>
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
						<li class="active"><a href="#tab-0" data-toggle="tab">x</a></li>
						<li><a href="#tab-1" data-toggle="tab">x</a></li>
						<li><a href="#tab-2" data-toggle="tab">x</a></li>
						<li><a href="#tab-3" data-toggle="tab">x</a></li>
						<li><a href="#tab-4" data-toggle="tab">x</a></li>
						<li><a href="#tab-5" data-toggle="tab">x</a></li>
						<li><a href="#tab-6" data-toggle="tab">x</a></li>
						<li><a href="#tab-7" data-toggle="tab">x</a></li>
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
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="http://placehold.it/800x600&amp;text=Slide+1" alt="...">
					    </div>
					    <div class="item">
					      <img src="http://placehold.it/800x600&amp;text=Slide+2" alt="...">
					    </div>
					    <div class="item">
					      <img src="http://placehold.it/800x600&amp;text=Slide+3" alt="...">
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span></span>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
include_once('includes/footer.php');
?>