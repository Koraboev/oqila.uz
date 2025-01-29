<?php
/**
 * Template Name: ABOUT AGENCY PAGE
 * 
 */
$lang = pll_current_language();
$questions = get_field('choose-questions');
?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>


    <!-- Service Section Start -->
    <section class="serivce-section pdt-110 pdb-80" data-background="images/bg/abs-bg7.png">
        <div class="section-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-title-left-part mrb-sm-30">
                            <div class="section-left-sub-title mb-20">
                                <h5 class="sub-title text-primary-color"><?php the_field('services-mini-title'); ?></h5>
                            </div>
                            <h2 class="title"><?php the_field('services-title'); ?></h2>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-6">
                        <div class="section-title-right-part">
                            <p><?php the_field('services-short-desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <?php for($i=1; $i < 7; $i++): ?>
                        <?php if(!empty(get_field('service-type-'.$i))): ?>
                            <div class="col-md-6 col-xl-4">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="webexflaticon flaticon-plan"></span>
                                    </div>
                                    <div class="service-content">
                                        <?php the_field('service-type-'.$i)?>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->
<section class="call-to">
    <div class="call-to-main-box">
        <div class="order-seo-img-box">
            <img src="/wp-content/uploads/2021/01/Bg-vajno-1536x394.png" alt="" class="order-seo-img">
        </div>
        <div class="call-seo-content-box">
            <div class="call-to-titles">
                <h2 class="call-to-content-title-1"><?php the_field('promoblock-get-proposal-title')?></h2>
                <p class="call-to-content-title-2"><?php the_field('promoblock-get-proposal-desc')?></p>
            </div>
            <a class="call-to-btn cs-btn-one btn-gradient-color" href="#" data-toggle="modal" data-target="#get-quote"><?php the_field('promoblock-get-proposal-btn-label')?></a>
        </div>
    </div>
</section>

<section class="about-section anim-object pdt-110 pdb-50">
    <div class="container">
        <div class="row align-items-center mrb-110 mrb-lg-50 mrb-sm-50">
            <div class="col-md-12 col-xl-6">
                <div class="about-image-block-2 mrb-lg-60">
                    <img class="img-full" src="<?php the_field('bit-img'); ?>" alt="">
                    <div class="call-us-now">
                        <!-- <p class="call-us-title mrb-5 text-white">Позвоните нам сейчас</p> -->
                        <h3 class="number mrt-0 text-white"><?php the_site_setting_field('primary-phone-number')?></h3>
                        <h3 class="number mrt-0 text-white"><?php the_site_setting_field('secondary-phone-number')?></h3>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <h2 class="mrb-30"><?php the_field('bit-title'); ?></h2>
                <p class="mrb-40"><?php the_field('bit-desc'); ?> </p>
            </div>
        </div>
    
    </div>
</section>


<?php include 'partials/block-text-image-bg.php'; ?>

<!--<section class="about-section pdt-165 pdt-lg-100 pdb-100 pdb-sm-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6">
                <h5 class="mrb-15 text-primary-color sub-title-side-line"><?php /*the_field('text-mini-title'); */?></h5>
                <h2 class="mrb-30"><?php /*the_field('text-title'); */?></h2>
                <p class="mrb-30"><?php /*the_field('desc'); */?></p>
            
            </div>
            <div class="col-md-12 col-xl-6 wow fadeInLeft mrb-lg-40" data-wow-delay="0ms" data-wow-duration="1000ms">
                <h5 class="mrb-15 text-primary-color sub-title-side-line"><?php /*the_field('faq-mini-title'); */?></h5>
                <h2 class="mrb-20"><?php /*the_field('faq-title'); */?></h2>
                <div class="faq-block">
                    <div class="accordion">
                          <?php /*foreach ($questions as $question): */?>
                            <div class="accordion-item">
                                <div class="accordion-header active">
                                    <h5 class="title"><a href=""><?php /*echo $question->post_title*/?></a></h5>
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                                <div class="accordion-body">
                                    <p></p>
                                </div>
                            </div>
                         <?php /*endforeach */?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<!--<section class="business-offer">
    <div class="container">
        <div class="business-offer-main-box">

            <div class="business-offer-content-box" style="">
                <h2 class="white-title text-uppercase">
                    <?php /*the_field('promo-title'); */?>
                </h2>
                <a href="#" class="btn cs-btn-one btn-gradient-color" data-toggle="modal" data-target="#get-quote">
                    <?php /*the_field('promo-btn-label'); */?>
                </a>
            </div>

            <div class="business-offer-img-box">
                <img src="<?php /*the_field('promo-img'); */?>">
            </div>

        </div>
    </div>
</section>
-->

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>

