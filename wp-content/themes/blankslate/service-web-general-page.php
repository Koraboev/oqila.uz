<?php
/**
 * Template Name: WEB GENERAL PAGE
 * Template Post Type: service-pages
 */

$main_review = get_field('reviews-main-entity');

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>


<!-- Promo block -->
<section class="web-general-block-1 container">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h2 class="block-1-title mrt-80"><?php the_field('promoblock-1-title') ?></h2>
                <div class="block-1-list skyscraper-text mrt-20">
                    <?php the_field('promoblock-1-desc') ?>
                </div>
            </div>
            <div class="col-md-6">
                <?php include 'partials/video-block.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/prices/web-site.php'; ?>
<?php include 'partials/cases.php'; ?>

<?php include in_array(get_the_ID(), [1963, 1961]) ? 'partials/prices/web-site-detail1.php' : 'partials/prices/web-site-detail.php'; ?>


<?php include 'partials/reviews.php'; ?>

<?php include 'partials/prices/web-calculator.php'; ?>

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>