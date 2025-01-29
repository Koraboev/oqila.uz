<?php
/**
 * Template Name: BLOG PAGE
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
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

            <ul class="nav justify-content-center blog-page__subscribe mrt-30">
                <li class="nav-item">
                    <a class="nav-link" href="<?php the_site_setting_field('instagram-url'); ?>" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php the_site_setting_field('facebook-url'); ?>" target="_blank">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php the_site_setting_field('telegram-url'); ?>" target="_blank">
                        <i class="fab fa-telegram-plane fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php the_site_setting_field('linkedin-url'); ?>" target="_blank">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                </li>
            </ul>

        </div>
            
    </div>
</section>

<!-- News Section Start -->
<section class="pdt-110 pdb-110">
    <div class="section-content ">
        <div class="container blog-page__container">
            <div class="row">

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col-md-6">
                        <div class="news-wrapper mrb-30 mrb-sm-40">

                            <a href="<?php the_permalink(); ?>">    
                                <div class="news-thumb">
                                
                                    <img class="img-full" src="<?=get_the_post_thumbnail_url()?>">
                                
                                    <div class="news-top-meta">
                                        <span class="entry-category">
                                            <?php
                                                $category = get_the_category();
                                                if(!empty($category))
                                                    echo $category[0]->name;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <div class="news-details ">
                                <div class="news-description">

                                    <a class="post-title-link mrb-30" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                    
                                    <div class="news-bottom-meta">
                                        <span class="entry-date mrr-20"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>
                                            <?=get_the_date()?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>

            <div class="row">
                <div class="col-xl-12 text-center mrt-30">
                    <?php previous_posts_link("&lt; So'nggilar |"); ?>
                    <?php next_posts_link(" Oldingilar &gt;", $wp_query->max_num_pages); ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- News Section End -->

<?php get_footer(); ?>