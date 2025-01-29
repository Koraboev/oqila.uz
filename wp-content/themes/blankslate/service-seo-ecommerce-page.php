<?php
/**
 * Template Name: SEO ECOMMERCE PAGE
 * Template Post Type: service-pages
 */

$lang = pll_current_language();
include 'partials/prices/seo-translation.php';
?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>



<!-- Prices -->
<?php include 'partials/prices/seo.php'; ?>

<!-- What's SEO -->
<?php include 'partials/block-image-text.php'; ?>

<!-- stats -->
<?php include 'partials/block-statistics.php'; ?>

<!-- Promo block: 3 years -->
<?php include 'partials/block-text-image-bg.php'; ?>

<!-- cases -->
<?php include 'partials/cases.php'; ?>

<!-- detailed price -->
<?php include 'partials/prices/seo-detail.php'; ?>

<?php include 'partials/reviews.php'; ?>

<section class="about-section anim-object pdt-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6">
                <div class="about-image-block mrb-lg-60">
                    <img class="img-full" src="<?php the_field('site-as-tree-img'); ?>">
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <h2 class="title-under-line mrb-70"><?php the_field('site-as-tree-title'); ?></h2>
                
                <?php the_field('site-as-tree-desc'); ?>
                
                <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"><?php the_field('site-as-tree-btn-label'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Promo block -->
<section class="business-offer">
	<div class="container">
		<div class="business-offer-main-box">

			<div class="business-offer-content-box" style="">

				<h2 class="white-title text-uppercase">
                    <?php the_field('promo-warranty-title'); ?>
                </h2>
              
				<a href="#" class="btn cs-btn-one btn-gradient-color" data-toggle="modal" data-target="#get-quote">
                    <?php the_field('promo-warranty-btn-label'); ?>
				</a>
            </div>

    		<div class="business-offer-img-box">
    			<img src="<?php the_field('promo-warranty-img'); ?>">
    		</div>

        </div>
    </div>
</section>

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>
