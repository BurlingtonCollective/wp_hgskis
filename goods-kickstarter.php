<?php
/*
Template Name: Goods Kickstarter Page 2015
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
                <div class="col-xs-6 col-sm-3">
                    <div class="good-wrapper">
                        <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank">
                            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/central-olive.png">
                        </a>
                        <h4 style="text-align:center;">Central Tee - Olive</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="good-wrapper">
                        <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank">
                            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/central-yellow.png">
                        </a>
                        <h4 style="text-align:center;">Central Tee - Yellow</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="good-wrapper">
                        <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank">
                            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/hg-tee.png">
                        </a>
                        <h4 style="text-align:center;">HJ Tee</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="good-wrapper">
                        <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank">
                            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/standard-def.png">
                        </a>
                        <h4 style="text-align:center;">Standard Def. Hoodie</h4>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="good-wrapper">
                        <a href="https://www.kickstarter.com/projects/hgskis/new-models-from-hg-skis-a-company-focused-on-durab" target="_blank">
                            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/kickstarter/lavish.png">
                        </a>
                        <h4 style="text-align:center;">Lavish Hoodie</h4>
                    </div>
                </div>
                <?php
                $goods = new WP_Query(array('post_type'=>'good', 'posts_per_page'=>-1));
                if($goods->have_posts()): while($goods->have_posts()): $goods->the_post();
                    error_log(types_render_field('sold-out', array('output' => 'raw')));
                    ?>
                    <div class="col-xs-6 col-sm-3">
                        <div class="good-wrapper">
                            <a href="<?php the_permalink(); ?>" <?= (types_render_field('sold-out', array('output' => 'raw'))) ? 'class="sold-out"' : ''; ?>>
                                <?php
                                echo types_render_field('main-image', array('class'=>'img-responsive', 'alt'=>get_the_title()));
                                ?>
                                <div class="sold-out-indicator"><span>Sold Out</span></div>
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