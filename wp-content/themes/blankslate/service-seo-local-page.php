<?php
/**
 * Template Name: SEO LOCAL PAGE
 * Template Post Type: service-pages
 */

include 'partials/prices/seo-translation.php';
$lang = pll_current_language();

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

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>
