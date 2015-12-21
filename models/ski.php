<?php
class Ski {
    public function __construct() {
        $this->name = get_the_title();
        $this->description = get_the_content();

        $this->logo = types_render_field('ski-logo', array('output'=>'raw'));
        $this->topSheetImage = types_render_field('ski-top-sheet-image', array('output'=>'raw'));
        $this->baseImage = types_render_field('ski-base-image', array('output'=>'raw'));
        $this->horzImage = types_render_field('ski-horz-image', array('output'=>'raw'));
        $this->showVimeoEmbed = types_render_field('ski-show-vimeo-embed', array('output'=>'raw'));
        $this->vimeoEmbed = types_render_field('ski-vimeo-embed', array('output'=>'raw'));

        $this->shipDateKnown = boolval(types_render_field('ski-ship-date-known', array('output'=>'raw')));
        $this->expectedShipDate = types_render_field('ski-expected-ship-date', array('style'=>'text', 'format'=>'F j'));
        $this->freeShipping = boolval(types_render_field('ski-free-shipping', array('output'=>'raw')));

        $this->currentPrice = types_render_field('ski-current-price', array('output'=>'raw'));
        $this->isPreorder = boolval(types_render_field('ski-is-preorder', array('output'=>'raw')));
        $this->showMSRP = boolval(types_render_field('ski-show-msrp', array('output'=>'raw')));
        $this->msrpPrice = types_render_field('ski-msrp-price', array('output'=>'raw'));
        $this->paypalForm = types_render_field('ski-paypal-form', array('output'=>'row'));

        $this->typeTagline = types_render_field('ski-type-tagline', array('output'=>'raw'));
        $this->displayLength = types_render_field('ski-display-length', array('output'=>'raw'));
        $this->showDimensionsImage = boolval(types_render_field('ski-show-dimensions', array('output'=>'raw')));
        $this->dimensionsImage = types_render_field('ski-dimensions-image', array('output'=>'raw'));
        $this->showTechnologyPanel = boolval(types_render_field('ski-show-technology-panel', array('output'=>'raw')));
        $this->showReviewsImage = boolval(types_render_field('ski-show-reviews-image', array('output'=>'raw')));
        $this->reviewsImage = types_render_field('ski-reviews-image', array('output'=>'raw'));

        $this->showAd = boolval(types_render_field('ski-show-ad', array('output'=>'raw')));
        $this->adImage = types_render_field('ski-ad-image', array('output'=>'raw'));
        $this->adLink = types_render_field('ski-ad-link', array('output'=>'raw'));
    }
};