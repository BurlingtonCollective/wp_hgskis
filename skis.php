<?php
/*
Template Name: Skis Page
*/
include_once('models/ski.php');
include_once('includes/header.php');
?>
    <section class="heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>HG Skis 15/16 Arsenal</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="product" class="overview all-skis">
        <div class="container">
            <div class="row">
                <?php
                $skis = new WP_Query(array('post_type'=>'ski', 'posts_per_page'=>-1));
                if ($skis->have_posts()) : while ($skis->have_posts()) : $skis->the_post();
                    $ski = new Ski(); ?>
                    <div class="col-md-6">
                        <div class="wrapper">
                            <h2 style="text-align: right; font-size: 18px;"><img class="img-responsive pull-left" src="<?= $ski->logo; ?>" alt="<?= $ski->name; ?>"><span style="display: block; font-size: 12px; line-height: 14px; margin-bottom: 6px;"><?= $ski->name; ?></span><?= $ski->typeTagline; ?> (<?= $ski->displayLength; ?>)</h2>
                            <a href="<?= $ski->link; ?>" style="display: block; padding-top: 20px;">
                                <img class="img-responsive" src="<?= $ski->horzImage; ?>">
                            </a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php
include_once('includes/footer.php');
?>