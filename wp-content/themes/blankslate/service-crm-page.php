<?php
/**
 * Template Name: CRM PAGE
 * Template Post Type: service-pages
 */

get_header();

// include 'partials/mega-banner.php';

// include 'partials/portfolio-screenshots.php';



// include 'partials/block-image-text.php';

?>

<?php $lang = pll_current_language(); ?>
<section class="banner-section pdt-20 pdb-100">
    <div class="container">
        <div class="banner-section-content">

            <div class="banner-section-content-part1">
                <h1 class="part1-title"><?php the_title()?></h1>
                <div class="part1-description skyscraper-text">
                    <?php the_field('banner-desc')?>
                </div>

                <?php if($lang == 'uz'): ?>
                     <img class="banner-section-oqilasmall-img" src="/wp-content/uploads/2021/03/Results-of-Clients-Circle-uz.png" alt="">
                <?php elseif($lang == 'ru'): ?>
                     <img class="banner-section-oqilasmall-img" src="/wp-content/uploads/2021/01/RSO.png" alt="">
                 <?php else: ?>
                     <img class="banner-section-oqilasmall-img" src="/wp-content/uploads/2021/06/results-of-clients.png">
                <?php endif ?>
                
                <div class="part1-order">
                    <a href="http://reg.tulpor.com/" class="cs-btn-one btn-gradient-color btn-lg">
                        <?php the_field('banner-get-quote-btn-label')?>
                    </a>

                    <?php if(!empty(get_field('banner-go-to-price-btn-label'))): ?>
                        <a href="#price-calculator-section" class="cs-btn-one btn-gradient-color btn-lg mr-lg-off mrl-40">
                            <?php the_field('banner-go-to-price-btn-label')?>
                        </a>
                    <?php else: ?>
                        <a class="banner-section__phone-link mr-lg-off mrl-40" href="tel:<?php the_site_setting_field('primary-phone-number')?>"><?php the_site_setting_field('primary-phone-number')?></a>
                    <?php endif; ?>
                </div>
                <?php if(!empty(get_field('banner-discount'))): ?>
                    <?php if ($lang == 'uz'): ?>
                        <div class="part1-description ">
                            <?php the_site_setting_field('web-discount-desc-uz')?>
                        </div>
                    <?php endif ?>
                    <?php if ($lang == 'ru'): ?>
                        <div class="part1-description ">
                            <?php the_site_setting_field('web-discount-desc-ru')?>
                        </div>
                    <?php endif ?>
                <?php else: ?>
                    <div class="part1-description ">
                        <?php the_site_setting_field('banner-discount')?>
                    </div>
                <?php endif; ?>
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


<section class="pdt-20 pdb-100">
    <div class="container">
        <div class="banner-title pb-3 pt-5">
            <?php if($lang == 'uz'):?>
                <h2><span>Tulpor CRM’dan foydalanishni o’rganing!</span></h2>
            <?php else:?>
                <h2><span>Узнайте, как использовать Tulpor CRM!</span></h2>
            <?php endif?>
        </div>
        <div class="crm-iframe">
            <iframe width="100%" height="615" src="https://www.youtube.com/embed/ynkFAsrEu28?si=eDGjXYGtgiErR1ip" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <!-- <div>
            <a href="http://reg.tulpor.com/" class="cs-btn-one btn-gradient-color btn-lg">
                <?php //the_field('banner-get-quote-btn-label')?>
            </a>
        </div> -->
    </div>
</section>

<?php if(pll_current_language() == 'uz'): ?>
    <section class="price-section section crm-price" id="price-calculator-section">
        <div class="container">
            <div class="row justify-content-md-center">
                    <div class="col-md-3 col-sm-12">
                        <div class="price-table mrb-30 text-center">
                            <div class="table-header">
                                <h4 class="pricing-plan-name">Kichik biznes</h4>
                                <h3 class="price">
                                    50,000
                                    <span class="price-currency">so’mdan</span><br>
                                    <span class="price-duration">oyiga</span>
                                </h3>
                            </div>
                            <div class="table-content">
                                <ul class="list-items">
                                    <li>CRMdan foydalanadigan xodimlar soni</li>
                                    <li><h4>1</h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rnatib berish</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rgatish va konsultatsiya</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="price-table mrb-30 text-center">
                            <div class="table-header">
                                <h4 class="pricing-plan-name">O'rta biznes</h4>
                                <h3 class="price">
                                    140,000
                                    <span class="price-currency">so’mdan</span><br>
                                    <span class="price-duration">oyiga</span>
                                </h3>
                            </div>
                            <div class="table-content">
                                <ul class="list-items">
                                    <li>CRMdan foydalanadigan xodimlar soni</li>
                                    <li><h4>3</h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rnatib berish</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rgatish va konsultatsiya</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="price-table mrb-30 text-center">
                            <div class="table-header">
                                <h4 class="pricing-plan-name">Katta biznes</h4>
                                <h3 class="price">
                                    200,000
                                    <span class="price-currency">so’mdan</span><br>
                                    <span class="price-duration">oyiga</span>
                                </h3>
                            </div>
                            <div class="table-content">
                                <ul class="list-items">
                                    <li>CRMdan foydalanadigan xodimlar soni</li>
                                    <li><h4>5</h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rnatib berish</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rgatish va konsultatsiya</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="price-table mrb-30 text-center">
                            <div class="table-header">
                                <h4 class="pricing-plan-name">Maxsus tarif</h4>
                                <h3 class="price">
                                    Kelishilgan
                                    <span class="price-currency">narxda</span><br>
                                    <!-- <span class="price-duration">oyiga</span> -->
                                </h3>
                            </div>
                            <div class="table-content">
                                <ul class="list-items">
                                    <li>CRMdan foydalanadigan xodimlar soni</li>
                                    <li><h4>Kelishilgan</h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rnatib berish</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>

                                    <li>Bepul o`rgatish va konsultatsiya</li>
                                    <li><h4><i class="fas fa-check"></i></h4></li>
                                    <li><hr></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
<?php else: ?>

    <section class="price-section section crm-price" id="price-calculator-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Малый бизнес</h4>
                            <h3 class="price">
                                <!-- <span class="price-currency">от</span> -->
                                50,000
                                <span class="price-currency">сум</span><br>
                                <span class="price-duration">в месяц</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">
                                <li>Число сотрудников использующие CRM</li>
                                <li><h4>1</h4></li>
                                <li><hr></li>

                                <li>Бесплатная установка</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>

                                <li>Бесплатное обучение и консультация</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Средний бизнес</h4>
                            <h3 class="price">
                                <!-- <span class="price-currency">от</span> -->
                                140,000
                                <span class="price-currency">сум</span><br>
                                <span class="price-duration">в месяц</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">
                                <li>Число сотрудников использующие CRM</li>
                                <li><h4>3</h4></li>
                                <li><hr></li>

                                <li>Бесплатная установка</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>

                                <li>Бесплатное обучение и консультация</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Большой бизнес</h4>
                            <h3 class="price">
                                <!-- <span class="price-currency">от</span> -->
                                200,000
                                <span class="price-currency">сум</span><br>
                                <span class="price-duration">в месяц</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">
                                <li>Число сотрудников использующие CRM</li>
                                <li><h4>5</h4></li>
                                <li><hr></li>

                                <li>Бесплатная установка</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>

                                <li>Бесплатное обучение и консультация</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Специальные</h4>
                            <h3 class="price">
                                Договорная
                                <span class="price-currency">цена</span><br>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">
                                <li>Число сотрудников использующие CRM</li>
                                <li><h4>Договорная</h4></li>
                                <li><hr></li>

                                <li>Бесплатная установка</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>

                                <li>Бесплатное обучение и консультация</li>
                                <li><h4><i class="fas fa-check"></i></h4></li>
                                <li><hr></li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php endif; ?>


<?php include 'partials/block-promo.php';?>
<?php
$screenshots = get_field('adword-portfolio');
?>
<section class="request-a-call-back pdt-110 pdt-sm-50 pdb-lg-70" style="background-image: url(/wp-content/uploads/2021/08/abs-bg5.png); background-repeat: no-repeat;">
		<div class="section-content">
            <div class="container text-center mrt-100 text-center mrb-100" >
                <div class="customer-logos-title-box">
                    <h2>
                        <?php the_field('adword-portfolio-title')?>
                    </h2>
                </div>
                <div class="row">
                    
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="crm-screenshot-title">
                            <h4 class="my-4"><span><?= the_field('crm-screenshot-title-1')?></span></h4>
                        </div>
                        <img src="<?= the_field('crm-screenshot-img-1')?>" alt="crm image 1">
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="crm-screenshot-title">
                            <h4 class="my-4"><span><?= the_field('crm-screenshot-title-2')?></span></h4>
                        </div>
                        <img src="<?= the_field('crm-screenshot-img-2')?>" alt="crm image 2">
                    </div>

                </div>
                <div class="text-center">
                    <a href="http://reg.tulpor.com" class="cs-btn-one btn-gradient-color btn-lg mrt-20">
                        <?php the_field('bti-bg-btn-label'); ?>
                    </a>
                </div>
            </div>
        </div>
</section>

<section class="pdt-110 pdb-60 seo-page-3-year-promo-section" data-overlay-dark="8">
    <div class="section-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-xl-6 skyscraper-text">
                    <h5 class="mrb-15 text-white sub-title-side-line"><?php the_field('bti-bg-mini-title'); ?></h5>
                    <h2 class="text-white mrb-30"><?php the_field('bti-bg-title'); ?></h2>

                    <?php the_field('bti-bg-desc'); ?>

                    <a href="http://reg.tulpor.com" class="cs-btn-one btn-gradient-color mrt-30"><?php the_field('bti-bg-btn-label'); ?></a>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="about-image-block-3">
                        <img class="img-full" src="<?php the_field('bti-bg-img'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>
