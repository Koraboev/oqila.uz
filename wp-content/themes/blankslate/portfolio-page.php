<?php
/**
 * Template Name: PORTFOLIO PAGE
 */

$lang = pll_current_language();

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>


<!-- cases -->
<?php include 'partials/cases.php'; ?>

<!-- Promo block -->
<section class="business-offer">
	<div class="container">
		<div class="business-offer-main-box">

			<div class="business-offer-content-box" style="">

				<h2 class="white-title text-uppercase">
                    <?php the_field('promo-you-worth-title'); ?>
                </h2>
              
				<a href="#" class="btn cs-btn-one btn-gradient-color" data-toggle="modal" data-target="#get-quote">
                    <?php the_field('promo-you-worth-btn-label'); ?>
				</a>
            </div>

    		<div class="business-offer-img-box">
    			<img src="<?php the_field('promo-you-worth-img'); ?>">
    		</div>

        </div>
    </div>
</section>

<?php include 'partials/reviews.php'; ?>

<?php get_footer(); ?>