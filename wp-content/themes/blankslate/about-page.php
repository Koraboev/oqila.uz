<?php
/**
 * Template Name: ABOUT PAGE
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
$asset_url = get_template_directory_uri() . '/assets';
?>
<?php get_header(); ?>
<?php $lang = pll_current_language(); ?>
<section class="banner-section pdt-20 pdb-100">
    <div class="container">
        <div class="banner-section-content">

            <div class="banner-section-content-part1">
                <h1 class="part1-title"><?php the_title()?></h1>
                <div class="part1-description">
                    <?php the_field('banner-desc')?>
                </div>
                
                <img class="banner-section-oqilasmall-img" src="/wp-content/uploads/2021/01/RSO.png">

                <div class="part1-order">
                    <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">
                        <?php the_field('banner-get-quote-btn-label')?>
                    </a>

                    <?php if(!empty(get_field('banner-go-to-price-btn-label'))): ?>
                        <a href="#price-calculator-section" class="cs-btn-one btn-gradient-color btn-lg mrl-40">
                            <?php the_field('banner-go-to-price-btn-label')?>
                        </a>
                    <?php else: ?>
                        <a class="banner-section__phone-link mrl-40" href="tel:<?php the_site_setting_field('primary-phone-number')?>"><?php the_site_setting_field('primary-phone-number')?></a>
                    <?php endif; ?>
                </div>

                <div class="part1-description">
                    <?php the_field('banner-discount')?>
                </div>
            </div>
            
            <div class="banner-section-content-part2">
                <div class="sect1">

                    <?php for($i=1; $i < 3; $i++): ?>
                        <?php if(!empty(get_field('banner-statistics-'.$i))): ?>
                            <div class="banner-block">
                                <?php the_field('banner-statistics-'.$i)?>
                            </div>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            
                <div class="sect2">

                <?php if($lang == 'uz'): ?>
                     <img class="rso" src="/wp-content/uploads/2021/03/Results-of-Clients-Circle-uz.png" alt="">
                <?php elseif($lang == 'ru'): ?>
                     <img class="rso" src="/wp-content/uploads/2021/01/RSO.png" alt="">
                 <?php else: ?>
                     <img class="rso" src="/wp-content/uploads/2021/06/results-of-clients.png">
                <?php endif ?>

                    <?php for($i=3; $i < 5; $i++): ?>
                        <?php if(!empty(get_field('banner-statistics-'.$i))): ?>
                            <div class="banner-block">
                                <?php the_field('banner-statistics-'.$i)?>
                            </div>
                        <?php endif ?>
                    <?php endfor ?>

                </div>
            </div>
        
            <div class="banner-section-content-part2-m">

                <?php for($i=1; $i < 5; $i++): ?>
                    <?php if(!empty(get_field('banner-statistics-'.$i))): ?>
                        <div class="banner-block">
                            <?php the_field('banner-statistics-'.$i)?>
                        </div>
                    <?php endif ?>
                <?php endfor ?>

            </div>
        </div>
    </div>
</section>

<section class="pdt-50">
    <div class="container">
        <div class="our-works-title-content" style="padding-top: 0px">
            <div class="our-works-title-content__inner">
                <h2 class="our-works-title">
                    <?php the_field('service-desc-title')?>
                </h2>
                <p class="mrt-15"><?php the_field('service-desc-content')?></p>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <h4>
                <?php the_field('service-logos-title');?>
            </h4>
        </div>
        <div class="about-page-img-box">
            <div class="about-page-img__item">
                <img src="/wp-content/themes/blankslate/assets/images/logos/820px-Google_Ads_logo.png" width="100">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/console.png" width="100">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/kwp.png" >
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/gbusiness.png">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/okt.png">
            </div>
        </div>
        <div class="about-page-img-box">
            <div class="about-page-img__item">
                <img src="/wp-content/themes/blankslate/assets/images/logos/gitlab.png" width="100">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/moz.png">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/ubuntu.png" >
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/dropbox.png">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/bitbucket.png">
            </div>
        </div>
        <div class="about-page-img-box">
            <div class="about-page-img__item">
                <img src="/wp-content/themes/blankslate/assets/images/logos/oqilacms.png">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/php.png">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/sql.png" >
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/yii.png">
            </div>
            <div class="about-page-img__item">
                <img  src="/wp-content/themes/blankslate/assets/images/logos/symfony.png" width="100">
            </div>
        </div>
    </div>
</section>

<section class="about-team-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-team-title-box">
                <h2 class="about-team__title"><?php the_field('team-title')?></h2>
                <?php the_field('team-content')?>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <?php $icons = [1 => 'flaticon-man-2', 'flaticon-like-3', 'flaticon-trophy-1', 'flaticon-briefcase-1']; ?>
        <?php for($i = 1; $i < 5; $i++): ?>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon <?=$icons[$i]?>"></span>
                    </div>
                    <h2 class="counter"><?php the_field("stats-$i-number"); ?></h2>
                    <h5 class="title"><?php the_field("stats-$i-desc"); ?></h5>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<section class="business-offer">
    <div class="container">
        <div class="business-offer-main-box">
            <div class="business-offer-img-box">
                <img src="<?php the_field('promo-about-img'); ?>">
            </div>
            <div class="business-offer-content-box" style="">
                <h2 class="white-title text-uppercase">
                    <?php the_field('promo-about-title'); ?>
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="vacancies-block pdb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('vacancies-title');?></h2>
                <p><?php the_field('vacancies-content')?></p>
                <a class="cs-btn-one btn-gradient-color" href="<?php the_field('vacancies-btn-url');?>"><?php the_field('vacancies-btn');?></a>
            </div>
        </div>
    </div>
</section>
<?php $reviews_list = get_field('reviews-list-entities'); ?>

<section class="comments text-center pdb-50">
    <div class="container ">
        <div class="comments-box text-left">
            <div class="comments-title">
                <h2><?php the_field('reviews-list-title')?></h2>
            </div>
            <div class="comments-content-box">  
                <?php foreach($reviews_list as $review):?>
                    <div class="comments-grid">
                        <div class="comments-grid-content">
                            <?php the_field('full-version', $review) ?>
                        </div>
                        <div class="comments-author">
                            <div class="comments-author-wrapper">
                                <?=get_the_post_thumbnail($review, 'customer-review', [
                                    'class' => 'author-img',
                                ])?>
                                <p class="comments-text"><?=$review->post_title?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
        <a class="cs-btn-one btn-gradient-color " href="<?php the_field('review-btn-url');?>"><?php the_field('review-btn');?></a>
    </div>
</section>
<?php get_footer(); ?>