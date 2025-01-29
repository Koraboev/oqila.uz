<?php
/**
 * Template Name: CUSTOMERS REVIEW PAGE
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'customer-review',
    'posts_per_page' => 20,
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'paged' => $paged
);

$wp_query = new WP_Query($args);
?>

<?php get_header(); ?>
<section class="section banner-section">
    <div class="container">
    
        <div class="mrt-20 text-center blog-page__banner-content">
            <h1 class="part1-title blog-page__banner-title"><?php the_title()?></h1>

            <div class="blog-page__banner-desc">
                <?php the_content()?>
            </div>

        </div>
            
    </div>
</section>



<section class="comments pdb-210 pdt-70">
    <div class="container">
        <div class="comments-box">
            <div class="comments-content-box">  
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="comments-grid">
                        <div class="comments-grid-content">
                            <?php the_field('full-version') ?>
                        </div>
                        <div class="comments-author">
                            <div class="comments-author-wrapper">
                                <img class="author-img" src="<?=get_the_post_thumbnail_url()?>">
                                <p class="comments-text"><?php the_title(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>