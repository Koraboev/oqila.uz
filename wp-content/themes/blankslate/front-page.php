<?php
/**
 * Template Name: MAIN PAGE
 */
$lang = pll_current_language();
$cases        = get_field('cases-entities');
$main_review  = get_field('reviews-main-entity');
$reviews_list = get_field('reviews-list-entities');
$asset_url    = get_template_directory_uri();

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>





<!-- prices -->
<?php
$batafsil = $lang == "uz" ? "Batafsil" : (($lang == "ru") ? "Подробнее" : "More");
?>
<div class="our-section" style="background-color: #fff" >
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div  class="section_text">
                  <h2><?= get_field('price-calculator-title') ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="cardGroup  ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 1.png" alt="">
                    </div>
                    <div id="section1">
                        <h4>
                        <?= get_field('pc-title-1') ?>
                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                            <?= get_field('pc-desc-1') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?= get_field('pc-url-1')?>">
                                <?= $batafsil ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="cardGroup ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 2.png" alt="">
                    </div>
                    <div id="section1">
                        <h4>
                            <?= get_field('pc-title-2') ?>
                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                            <?= get_field('pc-desc-2') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?= get_field('pc-url-2')?>">
                                <?= $batafsil ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="cardGroup ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 3.png" alt="">
                    </div>
                    <div id="section1">
                        <h4>
                            <?= get_field('pc-title-3') ?>
                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                            <?= get_field('pc-desc-3') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?= get_field('pc-url-3') ?>">
                                <?= $batafsil ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="cardGroup  ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 4.png" alt="">
                    </div>
                    <div id="section1">
                        <h4><?= get_field('pc-title-4') ?>

                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                            <?= get_field('pc-desc-4') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?= get_field('pc-url-4') ?>">
                                <?= $batafsil ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div  class="row" id="row_2">
            <div class="col-md-3">
                <div class="cardGroup ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 5.png" alt="">
                    </div>
                    <div id="section1">
                        <h4>
                           <?= get_field('pc-title-5') ?>
                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                           <?= get_field('pc-desc-5') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?=get_field('pc-url-5') ?>">
                              <?=$batafsil?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="cardGroup ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 6.png" alt="">
                    </div>
                    <div id="section1">
                        <h4><?= get_field('pc-title-6') ?>
                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                           <?=get_field('pc-desc-6') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?= get_field('pc-url-6') ?>">
                                <?= $batafsil ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="cardGroup ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 7.png" alt="">
                    </div>
                    <div id="section1">
                        <h4>
                            <?= get_field('pc-title-7') ?>
                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                            <?= get_field('pc-desc-7') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?= get_field('pc-url-7') ?>">
                                <?= $batafsil ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="cardGroup ">
                    <div id="img1">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/sayt 8.png" alt="">
                    </div>
                    <div id="section1">
                        <h4><?= get_field('pc-title-8') ?>
                        </h4>
                    </div>
                    <div id="sections_p">
                        <p>
                            <?= get_field('pc-desc-8') ?>
                        </p>
                    </div>
                    <div id="sections_button">
                        <button>
                            <a href="<?= get_field('pc-url-8') ?>">
                                <?= $batafsil ?>
                            </a>
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- cases -->
<section class="our-works ">
    <div class="container">
        <div class="our-works-title-content">
            
            <h2><?php the_field('cases-title')?></h2>
            
            <div class="our-works-btn-block ">
                <a class="cs-btn-one btn-gradient-color" href="<?=the_field('cases-show-all-btn-url')?>">
                    <?php the_field('cases-show-all-btn-label')?>
                </a>
            </div>
            
        </div>
        <div class="our-works-content">
            <?php foreach ($cases as $case): ?>
                <div class="our-works-single-case wow fadeInUp">
                    <a href="<?=get_post_permalink($case)?>">
                        <?=get_the_post_thumbnail($case, 'orginal', [
                            'class' => 'case',
                            'alt'   => $case->post_title
                        ])?>
                    <div class="row tags-container">
                        <div class="maintained-service col-md-6">
                            <ul class="maintained-service-list">
                                <?php $maintained_services = get_field('maintained-service-names', $case->ID);
                                foreach ($maintained_services as $maintained_service): ?>
                                    <li class="maintained-service-list-item"><?=$maintained_service?></li>
                                <?php endforeach?>
                            </ul>
                        </div>
                        <div class="company-name"><?=$case->post_title?></div>
                    </div>
                    </a>
                   
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- main review -->
<div id="sections2">
    <div class="container">
        <div class="row" id="reo2">
            <div class="col-sm-6">
                <?=wp_get_attachment_image(get_field('reviews-main-entity-image'), 'orginal', false, ['class' => 'how-to-img']);?>
            </div>
            <div class="col-sm-6" id="col6">
                <div>
                    <h4 id="h4">
                        <?php the_field('reviews-main-title')?>
                    </h4>
                </div>
                <div id="two_card">
<?php if(!empty($main_review)): ?>
                    <div class="cards2">
                        <?php the_field('full-version', $main_review->ID) ?>

                        <img src="<?=$asset_url?>/assets/images/line.png" class="line">

                        <div id="img5">
                        <div>
                            <?=get_the_post_thumbnail($main_review, 'customer-review', [
                                'class' => 'author-img',
                            ])?>
                        </div>
                        <p id="p2">
                            <?=$main_review->post_title?>
                        </p>
                    </div>

                    </div>
<?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="customer-logos">
    <div class="customer-logos-carousel">
        <div class="container">
            <div class="customer-logos-title-box">
                <h2>
                    <?php the_field('customers-logos-title')?>
                </h2>
            </div>
        </div>
        <div class="customer-logos-img-box">
            <img class="customer-logos-img" src="<?=$asset_url?>/assets/images/customer-logos.png">
        </div> 
    </div>
</section>

<!-- services -->

    <!-- promo block -->
<section class="order-seo">
    <div class="order-seo-main-box">
        <div class="container">
            <div class="order-seo-content-box">
                <h2 class="order-seo-content-title"><?php the_field('promoblock-be-first-title')?></h2>
                
                <a class="cs-btn-one btn-gradient-color btn-lg mrt-20" href="#" data-toggle="modal" data-target="#get-quote">
                    <?php the_field('promoblock-be-first-btn-label') ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- how we work -->
<section class="about-short">
    <div class="container">
        <div class="about-short-content-box">
            <div class="about-short-title-box">
                <div class="about-short-title">
                    <h2><?php the_field('work-process-title')?></h2>
                    <p><?php the_field('work-process-desc')?></p>
                </div>
            </div>
            <div class="about-short-services-box">
                <div class="about-short-services-block ceobg1">

                    <h4 class="about-short-services-block-title">
                        <?php the_field('work-process-1-spec-title')?>
                    </h4>

                    <p class="about-short-services-block-subtitle">
                        <?php the_field('work-process-1-spec-desc')?>
                    </p>

                </div>

                <div class="about-short-services-block ceobg2">
                
                    <h4 class="about-short-services-block-title">
                        <?php the_field('work-process-2-spec-title')?>
                    </h4>
                    
                    <p class="about-short-services-block-subtitle">
                        <?php the_field('work-process-2-spec-desc')?>
                    </p>

                </div>

                <div class="about-short-services-block ceobg3">
                    
                    <h4 class="about-short-services-block-title">
                        <?php the_field('work-process-3-spec-title')?>
                    </h4>
                
                    <p class="about-short-services-block-subtitle">
                        <?php the_field('work-process-3-spec-desc')?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- stats -->
<div id="sections2_3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>
                    <?php the_field('statistics-title')?>
                </h3>
                <div class="our_images_sections">
                    <?=wp_get_attachment_image(get_field('statistics-image'), 'orginal', false, ['class' => 'stats-photo-img']);?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mini-card1 cards01">
                    <?php the_field('statistics-1')?>
                </div>
                <div class="mini-card1 cards02">
                    <?php the_field('statistics-2')?>
                </div>
                <div class="mini-card1 cards03">
                    <?php the_field('statistics-3')?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- promo block -->

<div id="sections2_4">
    <div class="container">
        <div class="card_group">
            <div class="cardTitle">
                <h4 id="h4_1">
                    <?php the_field('promoblock-get-proposal-title')?>
                </h4>
                <p id="P03">
                    <?php the_field('promoblock-get-proposal-desc')?>
                </p>
            </div>
            <div  class="button_btn" >
                <a href="#" data-toggle="modal" data-target="#get-quote">
                <button>
                    <?php the_field('promoblock-get-proposal-btn-label')?>
                </button>
                </a>
            </div>
            <div  class="img_card">
                <img src="<?= get_template_directory_uri() ?>/assets/images/imagesGroup/women.png" alt="">
            </div>
        </div>

    </div>
</div>

<!-- reviews -->



<!-- seo block -->
<section class="seo">
    <div class="container">
        <div class="seo-content-box">
            <div class="seo-text-box">
                <div class="seo-title">
                    <h2><?php the_field('seo-block-title')?></h2>
                </div>
                <div class="seo-text-subtitle">
                    <p><?php the_field('seo-block-title-desc')?></p>
                </div>
                <div class="seo-links-box">
                    <a class="btn cs-btn-one btn-gradient-color" href="#" data-toggle="modal" data-target="#get-quote">
                        <?php the_field('seo-block-get-quote-btn-label')?>
                    </a>
                    <div class="seo-link">
                        <a href="<?php the_field('seo-block-service-page-link-url')?>">
                            <p class="seo-link-name"><?php the_field('seo-block-service-page-link-label')?></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="seo-img-box">
                <img src="<?php the_field('seo-block-image')?>" class="seo-img">
            </div>
        </div>
    </div>
</section>

<!-- values -->
<section class="about-us pdb-100">
    <div class="container">
        <div class="about-us-content-box">
            <div class="about-us-values">

                <?php if($lang == 'uz'): ?>
                    <img src="/wp-content/uploads/2021/03/values-uz.png" class="about-us-values-img">
                <?php elseif($lang == 'ru'): ?>
                    <img src="/wp-content/uploads/2021/03/values.png" class="about-us-values-img">
                <?php else: ?>
                    <img src="/wp-content/uploads/2021/05/values_en.png">
                <?php endif ?>
                
            </div>
            <div class="about-us-box">
                <div class="about-us-text-box">
                    <div class="about-us-title">
                        <h2><?php the_field('company-values-title')?></h2>
                    </div>
                    <div class="about-us-values-m">
                        <img src="/wp-content/uploads/2021/01/values.png" alt="" class="about-us-values-img">
                    </div>
                    <div class="about-us-subtitle">
                        <p><?php the_field('company-values-desc')?></p>
                        
                    </div>
                    <div class="about-us-btn">
                        <a class="discuss-about cs-btn-one btn-gradient-color" href="<?php the_field('company-values-btn-url')?>">
                            <div class="discuss-text"><?php the_field('company-values-btn-label')?></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>