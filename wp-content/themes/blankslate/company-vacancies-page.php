<?php
/**
 * Template Name: COMPANY VACANCIES PAGE
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'vacancies',
    'posts_per_page' => 20,
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'paged' => $paged,
    'lang' => 'all'
);

$wp_query = new WP_Query($args);
?>

<?php get_header(); ?>
<section class="section banner-section">
    <div class="container">
    
        <div class="mrt-20 text-center blog-page__banner-content">
            <h1 class="part1-title vacancies__banner-title"><?php the_field('banner-title')?></h1>
            <p class="vacancies__banner-text"><?php the_field('banner-text')?></p>
        </div>
            
    </div>
</section>


<section class="mandatory">
    <div class="container">
        <div class="mandatory__content text-left">
           <?php the_content()?>
        </div>
    </div>
</section>

<section class="vacancies pdt-70">
    <div class="container">
        <div class="vacancies-title-box">
            <h2 class="vacancies__title"><?php the_field('vacancies-title')?></h2>
        </div>
        <div class="vacancies-box">
            <div class="vacancies-content-box">  
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="vacancies-grid">
                        <a href="<?php the_field('ad-url') ?>" target="blank"><?php the_title()?>
                        <div class="vacancies-attributes">
                            <div class="vacancies__attributes__location">
                                <i class="fas fa-map-marker-alt vacancies-marker"></i>  <?php the_field('work_location') ?>
                            </div>
                            <div class="vacancies__attributes__time">
                                <i class="far fa-clock vacancies-clock"></i> <?php the_field('work_time') ?>
                            </div>
                        </div>
                        <i class="fas fa-chevron-right vacancies-chevron"></i>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

