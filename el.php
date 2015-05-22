<?php
/*
Template Name: El Template
*/
include_once('includes/header.php');
if (have_posts()) : while (have_posts()) : the_post();
?>
<section class="heading">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Rockered Powder Ski</h1>
			</div>
		</div>
	</div>
</section>
<section id="product">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="row product-wrapper">
					<div class="col-xs-6">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/topsheet.png">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/el/topsheet.png">
					</div>
					<div class="col-xs-6">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/base.png">
						<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/el/base.png">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="description-wrapper">
					<h2>EL</h2>
					<p>Most powder skis were designed for Alaska with huge open lines and neck deep snow.  We've developed a ski for the rest of us.  One which is just as floaty, but nimble enough to navigate the tightest tree runs.  The EL has a tight sidecut that lets you bring the ski onto groomers without noticing you're on a ski designed with powder in mind.  We recommend bringing the EL everywhere, from east coast glades to west coast big mountain backcountry.  The EL has all the same durability and carving technologies as our other skis.</p>
					<span class="price">$450.00</span>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 40px;">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="YENRL7A2CWQAW">
						<table>
							<tr>
								<td>
									<input type="hidden" name="on0" value="Size">Size
								</td>
							</tr>
							<tr>
								<td>
									<select name="os0">
										<option value="182cm">182cm </option>
									</select>
								</td>
							</tr>
						</table>
						<input type="image" src="http://hgskis.com/wp-content/themes/wp_hgskis/images/paypal-button.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<h3>Dimensions</h3>
					<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/el/specs.jpg">
					<div data-fitvids-target style="margin-top: 22px;">
						<iframe src="https://player.vimeo.com/video/125210733?color=ffffff&byline=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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