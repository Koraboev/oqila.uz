<?php
/**
 * Template Name: DESIGN LOGO PAGE
 * Template Post Type: service-pages
 */

$lang = pll_current_language();

$logos = get_posts([
    'posts_per_page' => -1,
    'post_type' => 'logo-portfolio'
]);
?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>


<!-- logos -->
<!--
    <section class="pdb-100">
    <div class="container">
        <div class="our-works-title-content">
            
            <div class="our-works-title-content__inner">
                <h2 class="our-works-title">
                    <?php the_field('cases-title')?>
                </h2>
            </div>
        
        </div>

        <div class="our-works-logos">
            <?php foreach ($logos as $logo): ?>
                <div class="our-works-single-logo">
                    <?=get_the_post_thumbnail($logo, 'orginal')?>
                </div>
            <?php endforeach ?>
        </div>

    </div>
 
</section>
            -->

            
<!-- prices -->
<?php include 'partials/prices/logo.php'; ?>


<?php include 'partials/block-image-text.php'; ?>

<!-- stats -->
<?php include 'partials/block-statistics.php'; ?>

<!-- promo block -->
<section class="business-offer">
	<div class="container">
		<div class="business-offer-main-box">
			<div class="business-offer-content-box" style="">

				<h2 class="white-title"><?php the_field('promoblock-2-title')?></h2>
              
				<a href="#" class="btn cs-btn-one btn-gradient-color" data-toggle="modal" data-target="#get-quote">
					<?php the_field('promoblock-2-btn-label')?>
				</a>
             </div>
			<div class="business-offer-img-box">
				<img src="/wp-content/uploads/2021/02/comp.png">
			</div>
        </div>
    </div>
</section>

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>
