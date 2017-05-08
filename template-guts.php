<?php
/*
Template Name: Eat the Guts Landing 2017
*/
get_header('guts');
global $post; setup_postdata($post);

function getThemeImg ($path)
{
    return get_stylesheet_directory_uri() . '/images/guts' . $path;
} ?>

<main id="template-guts">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="sr-only"><?php the_title(); ?></h1>
                <div class="campaign-logo-wrapper">
                    <img class="img-responsive" src="<?php echo getThemeImg('/guts-logo.png'); ?>" alt="Eat The Guts Campaign Logo">
                </div>
                <h2 class="text-center heading">A Video By HG Skis</h2>
                <img class="center-block img-responsive trailer-placeholder" src="<?php echo getThemeImg('/trailer-placeholder.jpg'); ?>">
                <a href="<?php echo the_field('ski_sale_link'); ?>" class="ski-sale-cta">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/skis-sale-eat-the-guts.png'); ?>">
                </a>
                <a href="<?php echo the_field('tall_t_link'); ?>" class="supported-by-cta">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/supported-by.png'); ?>">
                </a>
                <a href="<?php echo the_field('arts_riot_ticket_link'); ?>" class="arts-riot-cta">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/arts-riot-eat-the-guts.png'); ?>">
                </a>
                <div class="title-logo-wrapper">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/eat-the-guts-by-hg-skis.png'); ?>">
                </div>
                <h2 class="text-center heading">#EATTHEGUTS</h2>
            </div>
            <?php
            if (get_field('instagram_feed')) : ?>
                <div class="col-sm-10 col-sm-offset-1">
                    <?php the_field('instagram_feed'); ?>
                </div>
                <?php
            endif;
            if (get_field('more_guts_link')) : ?>
                <div class="col-xs-12 text-center">
                    <a href="<?php the_field('more_guts_link'); ?>"
                       class="btn btn-default btn-guts more-cta">
                      <span>More Guts</span>
                    </a>
                </div>
                <?php
            endif; ?>
            <div class="row">
                <div class="col-md-2 col-md-pull-1">
                    <nav class="nav-rad">
                        <ul class="nav nav-stacked">
                            <li>
                                <a href="http://hgskis.com">
                                    <img class="img-responsive" src="<?php echo getThemeImg('/logo-black-no-fill.svg'); ?>">
                                </a>
                            </li>
                            <?php
                            $menu = get_nav_menu('guts_nav');
                            if ($menu['items']) : foreach ($menu['items'] as $item) : ?>
                                <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                                <?php
                            endforeach; endif; ?>
                            <li>
                                <a href="https://www.facebook.com/hgskis" target="_blank">
                                    <img src="<?php echo getThemeImg('/fb-black.png'); ?>">
                                    <img class="rollover" src="<?php echo getThemeImg('/fb-white.png'); ?>">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/hgskis/" target="_blank">
                                    <img src="<?php echo getThemeImg('/insta-black.png'); ?>">
                                    <img class="rollover" src="<?php echo getThemeImg('/insta-inverse.png'); ?>">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
<?php
get_footer('guts'); ?>
