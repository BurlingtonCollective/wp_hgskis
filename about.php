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
			<div class="col-xs-4 col-sm-3">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/jim-gaeta-gibson.png" style="margin: 0 auto;">
			</div>
			<div class="col-xs-8 col-sm-6">
				<div class="wysiwyg-content" style="margin-top: 30px; text-align:center;">
					<p>“HG Skis is the east coast’s premier up and coming ski company. We represent the core scene that is the true east coast. Our skis and products are developed from skiers like you, for you."</p>
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
						<ul class="address">
							<li>HG Skis</li>
							<li>70 S. Winooski Ave #194</li>
							<li>Burlington, VT 05401</li>
						</ul>
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
						<a href="mailto:info@hgskis.com">info@hgskis.com</a>
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
				<p>
					<img class="hidden-xs hidden-sm" src="<?= get_template_directory_uri(); ?>/images/history-polaroids/top-alt.png" style="float: right; margin: 0px -40px 0 0;"><img class="hidden-xs hidden-sm" src="<?= get_template_directory_uri(); ?>/images/history-polaroids/middle-alt.png" style="float: right; margin: 0px -40px 0 0;"><img class="hidden-xs hidden-sm" src="<?= get_template_directory_uri(); ?>/images/history-polaroids/bottom-alt.png" style="float: right; margin: 0px -40px 0 0;">
					HG Skis is a freestyle ski company based in Burlington, VT. While we've been building and designing skis since 2006, the company was officially established in 2010. In the age of "locally grown products" and "micro-brew" ski companies, the east coast has been left without its own ski brand. As the only representatives of the east coast in the ski industry, we design, prototype, and manufacture product specifically for our terrain.<br><br>
					In 2006 I began work on a senior project in high school. Over a five 
					month process I built a ski press, a mold, and many of the 
					specialized ski tools still used by the company today. 
					Above all I built a pair of skis that I am still in love with.<br><br>
					For my first two years of college I was in an out of other 
					peoples' shop space. It was not until my go-to shop told me that I wasn’t allowed back that I decided to invest in my own machines, and start a ski company. During my third year of college I befriend Connor Gaeta. Connor originally started with me to develop our first twin tip, and function as a pro.<br><br>
					Since then, Connor has developed into a major component of 
					the company. The two of us are very different people, but we share one major thing in common. We are crazy about skiing, and want to bring innovation to the sport in anyway possible.<br><br>
					Currently we work out of a garage in Burlington, Vermont. We live in your neighborhood, and we are building our favorite skis for you.<br><br>
					-Harrison G, founder of HG Skis
				</p>
			</div>
		</div>
	</div>
</section>
<section id="retailers" class="heading" style="margin-top:10px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-heading">
					<h1>Retailers</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="retailers">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/board-barn.png">
			</div>
			<div class="col-xs-6 col-sm-3">
				<h3>First Stop Board Barn</h3>
				<ul class="address">
					<li>8474 Rt. 4</li>
					<li>Killington, VT USA 05751</li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-3 next">
				<img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/alpine-shop.png">
			</div>
			<div class="col-xs-6 col-sm-3">
				<h3>Alpine Shop</h3>
				<ul class="address">
					<li>1184 Williston Rd.</li>
					<li>South Burlington, VT USA 05403</li>
				</ul>
			</div>
		</div>
	</div>
</section>
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
				<p>As a small company we take warranties very seriously. We review all product issues on a case to case basis. Defects in materials or workmanship will be reviewed, fix or replaced. Wear and tear is expected in our sport. We design skis to last for the practical lifetime of the product. For warranty issues or questions please email us at <a href="mailto:info@hgskis.com">info@hgskis.com</a>.</p>
			</div>
		</div>
	</div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>