<?php
/*
Template Name: Skis Kickstarter Page 2015
*/
include_once('includes/header.php');
if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>2016 Skis Now Available</h1>
            </div>
        </div>
    </div>
</section>
<section id="kickstarter">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8">
                <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank" style="display: block; margin-bottom: 40px;">
                    <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/were-on-kickstarter.png" alt="We're on Kickstarter!">
                </a>
                <p>We are excited to be bringing two new models to our quiver.</p>
                <p style="margin-bottom: 60px;">Click on any ski to view more info on our kickstarter page.  Prices are very limited, early bird gets the worm.</p>
            </div>
            <div class="col-md-8 col-md-pull-4">
                <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank" style="display: block; margin-bottom: 54px;">
                    <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/el-horz.png" alt="hg skis - el ski">
                </a>
                <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank" style="display: block; margin-bottom: 54px;">
                    <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/transfer-horz.png" alt="hg skis - transfer ski">
                </a>
                <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank" style="display: block;">
                    <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/stinger-horz.png" alt="hg skis - stinger ski">
                </a>
            </div>
        </div>
    </div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>