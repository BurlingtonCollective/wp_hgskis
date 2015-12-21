<?php
include_once('models/ski.php');
include_once('includes/header.php');
if (have_posts()) : while (have_posts()) : the_post();
$ski = new Ski(); ?>
<section class="heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?= $ski->typeTagline; ?></h1>
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
                        <img class="img-responsive" src="<?= $ski->topSheetImage; ?>">
                    </div>
                    <div class="col-xs-6">
                        <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/base.png">
                        <img class="img-responsive" src="<?= $ski->baseImage; ?>">
                    </div>
                </div>
                <div class="hidden-xs" data-fitvids-target>
                    <?php if ($ski->showVimeoEmbed) : ?>
                        <?= $ski->vimeoEmbed; ?>
                    <?php endif; ?>
                    <?php if ($ski->showAd) : ?>
                        <?php if ($ski->adTitle) : ?>
                            <h3><?= $ski->adTitle; ?></h3>
                        <?php endif; ?>
                        <div>
                            <a href="<?= $ski->adLink; ?>">
                                <img class="img-responsive" src="<?= $ski->adImage; ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="description-wrapper">
                    <h2><?= $ski->name; ?></h2>
                    <?= $ski->description; ?>
                    <?php if ($ski->freeShipping) : ?>
                        <span class="free-shipping">Free Shipping</span>
                    <?php endif; ?>
                    <span class="price">
                        <?php if ($ski->isPreorder) : ?>
                            <span class="preorder">Preorder: <?= $ski->currentPrice; ?></span>
                        <?php else : ?>
                            <?= $ski->currentPrice; ?>
                        <?php endif; ?>
                        <?php if ($ski->showMSRP) : ?>
                            (MSRP <?= $ski->msrpPrice; ?>)
                        <?php endif; ?>
                    </span>
                    <?php if ($ski->isBackordered) : ?>
                        <span class="expected-ship-date"><?= $ski->backorderMessage; ?></span>
                    <?php endif; ?>
                    <?php if ($ski->shipDateKnown && !$ski->isBackordered) : ?>
                        <span class="expected-ship-date">Expected Ship Date: <?= $ski->expectedShipDate; ?></span>
                    <?php endif; ?>
                    <?= $ski->paypalForm; ?>
                    <?php if ($ski->showDimensionsImage) : ?>
                        <h3>Dimensions</h3>
                        <img class="img-responsive" src="<?= $ski->dimensionsImage; ?>">
                    <?php endif; ?>
                    <?php if ($ski->showTechnologyPanel) : ?>
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
                                        <a href="#panel-7" data-toggle="collapse" data-parent="#technology">
                                            <img class="img-responsive initial" src="<?= get_template_directory_uri(); ?>/images/stinger/techicons/pop.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri(); ?>/images/stinger/techicons/pop-rollover.png">
                                            <span>Champagne Pop</span>
                                            <i class="glyphicon glyphicon-chevron-down"></i>
                                            <i class="glyphicon glyphicon-chevron-right"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="panel-7">
                                    <div class="panel-body">
                                        <ul>
                                            <li>More pop than a bottle of grand vintage on Birdman's birthday.</li>
                                            <li>Our camber will get you higher.</li>
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
                                            <span>Fat Ass Edges</span>
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
                                        <a href="#panel-8" data-toggle="collapse" data-parent="#technology">
                                            <img class="img-responsive initial" src="<?= get_template_directory_uri();?>/images/stinger/techicons/early-edge.png"><img class="img-responsive show-hover" src="<?= get_template_directory_uri();?>/images/stinger/techicons/early-edge-rollover.png">
                                            <span>Early End Edge</span>
                                            <i class="glyphicon glyphicon-chevron-down"></i>
                                            <i class="glyphicon glyphicon-chevron-right"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="panel-8">
                                    <div class="panel-body">
                                        <ul>
                                            <li>Our edges end below the contact point of the ski.  This reduces pressure in the tips, preventing edge blowouts.</li>
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
                                            <li>It's fun to ski backwards.</li>
                                            <li>Fully symmetric ski - feels like freedom.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($ski->showReviewsImage) : ?>
                        <h3>Reviews</h3>
                        <img class="img-responsive" src="<?= $ski->reviewsImage; ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endwhile; endif;
include_once('includes/footer.php');
?>