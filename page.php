<?php
include_once('includes/header.php');
global $post; setup_postdata($post);
?>
<section class="heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<section id="page-default">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php
include_once('includes/footer.php');
?>
