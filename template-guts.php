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
                <?php if (get_field('guts_trailer_embed')) : ?>
                    <div class="wysiwyg-content" data-fitvids-target>
                        <?php the_field('guts_trailer_embed'); ?>
                    </div>
                <?php else: ?>
                    <img class="center-block img-responsive trailer-placeholder" src="<?php echo getThemeImg('/trailer-placeholder.jpg'); ?>">
                <?php endif; ?>
                <a href="<?php the_field('ski_sale_link'); ?>" class="ski-sale-cta">
                    <img class="img-responsive center-block" src="<?php the_field('ski_sale_image'); ?>">
                </a>
                <?php if (have_rows('guts_logos')) : ?>
                    <h2 class="text-center heading support">Presented By</h2>
                    <div class="text-center logo-container" style="margin-bottom: 0;">
                        <a href="http://hgskis.com/" class="logo-link" target="_blank">
                            <img src="<?= getThemeImg('/updated/hg.png') ?>" style="margin-bottom: 0;">
                        </a>
                        <a href="https://www.talltproductions.com/" class="logo-link" target="_blank">
                            <img src="<?= getThemeImg('/updated/tall-t.png') ?>" style="margin-bottom: 0;">
                        </a>
                    </div>
                <?php endif; ?>
                <img id="premieres" class="img-responsive center-block" src="<?= getThemeImg('/updated/spacer.png'); ?>">
                <a href="http://www.highfive-festival.com/en/" class="arts-riot-cta" title="HG Skis at High Five Festival October 6-8th, 2017" target="_blank" style="display: block; margin-bottom: 40px;">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/updated/high-five.png'); ?>" alt="HG Skis at High Five Festival October 6-8th, 2017">
                </a>
                <a href="http://firstchairfestival.com/" class="arts-riot-cta" title="HG Skis at First Chair Festival October 7th, 2017" target="_blank" style="display: block; margin-bottom: 40px;">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/updated/first-chair.png'); ?>" alt="HG Skis at First Chair Festival October 7th, 2017">
                </a>
                <a href="<?php echo the_field('arts_riot_ticket_link'); ?>" class="arts-riot-cta" title="HG Skis at Arts Riot October 13th, 2017" target="_blank" style="display: block; margin-bottom: 40px;">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/updated/arts-riot.png'); ?>" alt="HG Skis at Arts Riot October 13th, 2017">
                </a>
                <a href="https://www.facebook.com/events/364598540653960" class="arts-riot-cta" title="HG Skis at Plymouth State Free Ski Club October 20th, 2017" target="_blank" style="display: block; margin-bottom: 40px;">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/updated/plymouth.png'); ?>" alt="HG Skis at Plymouth State Free Ski Club October 20th, 2017">
                </a>
                <a href="http://if3festival.com/" class="arts-riot-cta" title="HG Skis at IF3 Festival October 26-29th, 2017" target="_blank" style="display: block; margin-bottom: 40px;">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/updated/if3.png'); ?>" alt="HG Skis at IF3 Festival October 26-29th, 2017">
                </a>
                <a href="mailto:info@hgskis.com" target="_blank" title="Host a Premiere">
                    <img class="img-responsive center-block" src="<?php echo getThemeImg('/updated/host-premiere-btn.png'); ?>" alt="Host a Premiere" width="320">
                </a>
                <img class="img-responsive center-block" src="<?= getThemeImg('/updated/spacer.png'); ?>">
                <?php if (have_rows('guts_logos')) : ?>
                    <h2 class="text-center heading support" style="margin-top: 0;">Supported By</h2>
                    <div class="text-center logo-container">
                        <?php foreach (get_field('guts_logos') as $index => $logo) : ?>
                            <a href="<?php echo $logo['guts_logo_link']; ?>" class="logo-link" target="_blank" <?= $index == 2 ? 'style="display: block;"' : ''; ?>>
                                <img src="<?php echo $logo['guts_logo_image']; ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <img class="img-responsive center-block" src="<?= getThemeImg('/updated/spacer.png'); ?>">
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
<!--<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>-->
<?php
get_footer('guts'); ?>
