<?php
/**
 * Template Name: BOOK PAGE
 */

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


<?php get_footer(); ?>