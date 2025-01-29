<?php
/**
 * The template for displaying all single posts and attachments
 */
?>

<?php get_header(); ?>
<!--new css codes via figma-->
<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/single.css" type="text/css" />


<!-- Page Title Start -->
<section class="post-detail-breadscrumb-section mrt-80">
    <div class="container blog-single-news__container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=get_home_page_url()?>"><?=the_translation_field('breadcrumb-main-page')?></a></li>

                <li class="breadcrumb-item"><a href="<?=get_blog_page_url()?>"><?=the_translation_field('breadcrumb-blog-page')?></a></li>

            </ol>
        </nav>
    </div>
</section>
<!-- Page Title End -->

<!-- Service Details Section Start -->
<section class="blog-single-news mrb-100">
    <div class="container blog-single-news__container">
        <div class="row">

                <div class="col-md-6">
                <div class="single-news-details news-wrapper skyscraper-text mrb-30">
                    <h1 class="entry-title mrb-20"><?php the_title(); ?></h1>
                    <div class="single-news-content">
                        <div class="news-bottom-meta mrt-20 mrb-10">
                            <span class="entry-date text-muted">
                                <i class="far fa-calendar-alt mrr-10 text-primary-color"></i>
                                <?=the_translation_field('blog-last-modified')?>: <?=get_the_modified_date()?>
                            </span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="news-thumb">
                        <img class="img-full" src="<?=get_the_post_thumbnail_url()?>">
                    </div>
                </div>
            <div id="bottom-hr" class="col-md-12 mt-4"><hr></div>
            <div class="col-md-9">
                <?php the_content(); ?>
                <div id="kettik">
                <img src="<?=get_template_directory_uri() ?>/assets/images/bg/kettik.png"/>
                <img src="<?=get_template_directory_uri() ?>/assets/images/logo-kettik.png"/>
                    <h3>
                        <?php if (pll_current_language() == 'uz') { ?>
                            Internet reklama va Dasturlash xizmatlari
                        <?php } else { ?>
                            Услуги интернет-рекламы и программирования
                        <?php } ?>
                    </h3>
                    <a id="tugma" href="/" class="cs-btn-one btn-gradient-color"><?= pll_current_language() == 'uz' ? "Kettik!" : "Пойдем!" ?></a>
                </div>
            <div class="mrt-85">
                    <?php yarpp_related(
                        array(
                            'post_type' => array('post'),
                            'show_pass_post' => false, // show password-protected posts
                            'past_only' => false, // only posts published before this
                            'exclude' => array(), // a list of term_taxonomy_ids.
                            'recent' => false,  // to limit to entries published recently,
                                                // set to something like '15 day', '20 week', or '12 month'.

                            // Relatedness algorithm options: these determine how "relatedness" is computed
                            // Weights are used to construct the "match score" between candidates and the reference post
                            /*'weight' => array(
                                //'body' => 1,
                                'title' => 1, // larger weights mean this criteria will be weighted more heavily
                                'tax' => array(
                                    'post_tag' => 1,
                                    //'post_category' => 1,
                                    //... // put any taxonomies you want to consider here with their weights
                                )
                            ),*/
                            // Specify taxonomies and a number here to require that a certain number be shared:
                            /*'require_tax' => array(
                                'post_tag' => 1 // for example, this requires all results to have at least one 'post_tag' in common.
                            ),*/
                            // The threshold which must be met by the "match score"
                            'threshold' => 1,

                            // Display options:
                            'template' => 'yarpp-template-related-posts.php', // either the name of a file in your active theme or the boolean false to use the builtin template
                            'limit' => 3, // maximum number of results
                            'order' => 'score DESC'
                        ),
                        get_the_ID(), // second argument: (optional) the post ID. If not included, it will use the current post.
                        true // third argument: (optional) true to echo the HTML block; false to return it
                    ); ?>

                </div>
                        
                    
                <?php 

                    // enable comments in next step
                    if ( comments_open() || get_comments_number() )
                        comments_template();
                        
                ?>

                <?php 
                    /**
                    * Add support for DISCUZ comments plugin
                    */
                    function my_wpdiscuz_shortcode() {
                        if (file_exists(ABSPATH . 'wp-content/plugins/wpdiscuz/themes/default/comment-form.php')) {
                        ob_start();
                        include_once ABSPATH . 'wp-content/plugins/wpdiscuz/themes/default/comment-form.php';
                        return ob_get_clean();
                        }
                    }
                    add_shortcode('wpdiscuz_comments', 'my_wpdiscuz_shortcode');
                 ?>
                        

            </div>
            <div class="col-md-3 sidebar-right">
                <?php require 'partials/contact-sidebar.php'?>
            </div>

        </div>
    </div>
</section>
<!-- About Section End -->

<?php get_footer(); ?>
