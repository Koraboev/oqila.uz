<?php
/**
 * Template Name: UNIVERSAL PAGE
 * Template Post Type: service-pages
 */

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>



<!-- Prices -->
<?php echo get_field('universal-prices'); ?>

<!-- What's UNIVERSAL -->
<?php include 'partials/block-image-text.php'; ?>


<!-- stats -->
<div class="container text-center mrt-100">
    <h4><?php the_field('block-title')?></h4>
    <div class="row mrt-50">
        <?php $icons = [1 => 'flaticon-man-2', 'flaticon-like-3', 'flaticon-trophy-1', 'flaticon-briefcase-1']; ?>
        <?php for($i = 1; $i < 5; $i++): ?>
            <div class="col-md-6 col-lg-6 col-xl-3 text-left">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon <?=$icons[$i]?>"></span>
                    </div>
                    <h2 class="counter google-adwords__counter"><?php the_field("static-block-title-$i"); ?></h2>
                    <h5 class="title google-adwords__title"><?php the_field("static-block-desc-$i"); ?></h5>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php the_field('after-stat-text')?>
        </div>
    </div>
</div>

<!-- Promo block: 3 years -->
<?php include 'partials/block-text-image-bg.php'; ?>


<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>