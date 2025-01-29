<?php
/**
 * Template Name: WEB LANDING PAGE
 * Template Post Type: service-pages
 * 
 */
$design_level_title['uz'] = 'Dizayn darajasi';
$design_level_value_first['uz'] = 'Oddiy';
$design_level_value_second['uz'] = 'Yuqori';
$design_level_value_third['uz'] = 'Maxsus';
///
$mobile_title['uz'] = 'Saytning mobil shakli';
$mobile_value_first['uz'] = '<i class="fas fa-check"></i>';
$mobile_value_second['uz'] = '<i class="fas fa-check"></i>';
$mobile_value_third['uz'] = '<i class="fas fa-check"></i>';
///
$seo_title['uz'] = 'Kalit iboralar tahlili';
$seo_desc['uz'] = '(SEO)';
$seo_value_first['uz'] = '<i class="fas fa-minus"></i>';
$seo_value_second['uz'] = '<i class="fas fa-check"></i>';
$seo_value_third['uz'] = '<i class="fas fa-check"></i>';
///
$copywriting_title['uz'] = 'Matn yozish';
$copywriting_value_first['uz'] = '<i class="fas fa-check"></i>';
$copywriting_value_second['uz'] = '<i class="fas fa-check"></i>';
$copywriting_value_third['uz'] = '<i class="fas fa-check"></i>';
///
$google_title['uz'] = 'Google Analyticsga ulash va buyurtmalar statistikasi';
$google_value_first['uz'] = '<i class="fas fa-minus"></i>';
$google_value_second['uz'] = '<i class="fas fa-minus"></i>';
$google_value_third['uz'] = '<i class="fas fa-check"></i>';
///
$price_title['uz'] = 'Jami sarmoya narxi';
$price_value_first['uz'] = '6,510,000 so’m';
$price_value_second['uz'] = '8,147,000 so’m ';
$price_value_third['uz'] = '11,041,000 so’m';

///RU


$design_level_title['ru'] = 'Уровень дизайна';
$design_level_value_first['ru'] = 'Простой';
$design_level_value_second['ru'] = 'Высокий';
$design_level_value_third['ru'] = 'Специальный';
///
$mobile_title['ru'] = 'Мобильный формат сайта';
$mobile_value_first['ru'] = '<i class="fas fa-check"></i>';
$mobile_value_second['ru'] = '<i class="fas fa-check"></i>';
$mobile_value_third['ru'] = '<i class="fas fa-check"></i>';
///
$seo_title['ru'] = 'Анализ ключевых фраз';
$seo_desc['ru'] = '(SEO)';
$seo_value_first['ru'] = '<i class="fas fa-minus"></i>';
$seo_value_second['ru'] = '<i class="fas fa-check"></i>';
$seo_value_third['ru'] = '<i class="fas fa-check"></i>';
///
$copywriting_title['ru'] = 'Написание текста';
$copywriting_value_first['ru'] = '<i class="fas fa-minus"></i>';
$copywriting_value_second['ru'] = '<i class="fas fa-check"></i>';
$copywriting_value_third['ru'] = '<i class="fas fa-check"></i>';
///
$google_title['ru'] = 'Ссылка на Google Analytics и статистика заказов';
$google_value_first['ru'] = '<i class="fas fa-minus"></i>';
$google_value_second['ru'] = '<i class="fas fa-minus"></i>';
$google_value_third['ru'] = '<i class="fas fa-check"></i>';
///
$price_title['ru'] = 'Сумма инвистиций';
$price_value_first['ru'] = '6,510,000 сум';
$price_value_second['ru'] = '8,147,000 сум';
$price_value_third['ru'] = '11,041,000 сум';

$lang = pll_current_language();

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>



<!-- Prices -->
<?php include 'partials/prices/landing.php'; ?>

<!-- What's SEO -->
<?php include 'partials/block-image-text.php'; ?>

<!-- stats -->
<?php include 'partials/block-statistics.php'; ?>

<!-- Promo block: 3 years -->
<?php include 'partials/block-text-image-bg.php'; ?>

<!-- cases -->
<?php include 'partials/cases.php'; ?>

<!-- detailed price -->
<section class="detailed-price-section section section--dark">
    <div class="container">

        <?php if($lang == 'uz'): ?>

            <h2 class="section__title-h2 section-title-light"><span>Landing page</span> batafsil narxi</h2>

            <p class="section__text mrt-10">Biz uchun ochiq-oydinlik juda muhim. Siz nima uchun pul to’layotganingizni va biz nimalar qilishimizni aniq bilishingiz kerak.</p>

            <div class="table-responsive detailed-price-table-box">
                <table class="table detailed-price-table detailed-price-table--dark mrt-30">
                    
                    <tr>
                        <td class="detailed-price-table__value"></td>
                        <td class="detailed-price-table__value">Kichik biznes</td>
                        <td class="detailed-price-table__value">O’rta biznes</td>
                        <td class="detailed-price-table__value">Katta biznes</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$design_level_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$design_level_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$design_level_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$design_level_value_third['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$mobile_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$mobile_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$mobile_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$mobile_value_third['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$seo_title['uz']?></h4>

                            <p class="price-calculator-option-desc"><?=$seo_desc['uz']?></p>
                        </td>
                        <td class="detailed-price-table__value"><?=$seo_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$seo_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$seo_value_third['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$copywriting_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$copywriting_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$copywriting_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$copywriting_value_third['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$google_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$google_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$google_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$google_value_third['uz']?></td>
                    </tr>            

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$price_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$price_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$price_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$price_value_third['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <p class="price-calculator-option-desc">Savollar bormi? Qo'ng'iroq qiling!</p>
                            <br>
                            <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                                <?php the_site_setting_field('primary-phone-number') ?>
                            </a>
                        </td>
                        <td class="detailed-price-table__value">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                        </td>
                        <td class="detailed-price-table__value detailed-price-table__value--dark">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                        </td>
                        <td class="detailed-price-table__value">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                        </td>
                    </tr>

                </table>
            </div>
            <div id="accordion" class="detailed-price-table__accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Kichik biznes
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$design_level_title['uz']?></th>
                                        <td><?=$design_level_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$mobile_title['uz']?></th>
                                        <td><?=$mobile_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$seo_title['uz']?><br><small><?=$seo_desc['uz']?></small></th>
                                        <td><?=$seo_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$copywriting_title['uz']?></th>
                                        <td><?=$copywriting_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$google_title['uz']?></th>
                                        <td><?=$google_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$price_title['uz']?></th>
                                        <td><?=$price_value_first['uz']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                O’rta biznes
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$design_level_title['uz']?></th>
                                        <td><?=$design_level_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$mobile_title['uz']?></th>
                                        <td><?=$mobile_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$seo_title['uz']?><br><small><?=$seo_desc['uz']?></small></th>
                                        <td><?=$seo_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$copywriting_title['uz']?></th>
                                        <td><?=$copywriting_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$google_title['uz']?></th>
                                        <td><?=$google_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$price_title['uz']?></th>
                                        <td><?=$price_value_second['uz']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Katta biznes
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$design_level_title['uz']?></th>
                                        <td><?=$design_level_value_third['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$mobile_title['uz']?></th>
                                        <td><?=$mobile_value_third['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$seo_title['uz']?><br><small><?=$seo_desc['uz']?></small></th>
                                        <td><?=$seo_value_third['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$copywriting_title['uz']?></th>
                                        <td><?=$copywriting_value_third['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$google_title['uz']?></th>
                                        <td><?=$google_value_third['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$price_title['uz']?></th>
                                        <td><?=$price_value_third['uz']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 text-center">
                        <p class="price-calculator-option-desc">Savollar bormi? Qo'ng'iroq qiling!</p>
                        <br>
                        <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                            <?php the_site_setting_field('primary-phone-number') ?>
                        </a>
                    </div>
                    <div class="col-md-6 text-center mt-3">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                    </div>
                </div>
            </div>

        <?php else: ?>
            
            <h2 class="section__title-h2 section-title-light">Подробные цены на<span></span>Лендинг пеидж</h2>

            <p class="section__text mrt-10">Для нас очень важна прозрачность цен. Вы должны точно знать за что вы оплачиваете и что вы получите заказав продвижение сайта.</p>

            <div class="table-responsive detailed-price-table-box">
                <table class="table detailed-price-table detailed-price-table--dark mrt-30">
                    
                    <tr>
                        <td class="detailed-price-table__value"></td>
                        <td class="detailed-price-table__value">Малый бизнес</td>
                        <td class="detailed-price-table__value">Средний бизнес</td>
                        <td class="detailed-price-table__value">Крупный бизнес</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$design_level_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$design_level_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$design_level_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$design_level_value_third['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$mobile_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$mobile_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$mobile_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$mobile_value_third['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$seo_title['ru']?></h4>

                            <p class="price-calculator-option-desc"><?=$seo_desc['ru']?></p>
                        </td>
                        <td class="detailed-price-table__value"><?=$seo_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$seo_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$seo_value_third['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$copywriting_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$copywriting_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$copywriting_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$copywriting_value_third['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$google_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$google_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$google_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$google_value_third['ru']?></td>
                    </tr>            

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$price_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$price_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$price_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$price_value_third['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <p class="price-calculator-option-desc">Если вопросы, не ждите. Звоните специалисту прямо сейчас!</p><br>
                            <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                                <?php the_site_setting_field('primary-phone-number') ?>
                            </a>
                        </td>
                        <td class="detailed-price-table__value">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Начать работу</a>
                        </td>
                        <td class="detailed-price-table__value detailed-price-table__value--dark">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Начать работу</a>
                        </td>
                        <td class="detailed-price-table__value">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Начать работу</a>
                        </td>
                    </tr>

                </table>
            </div>
            <div id="accordion" class="detailed-price-table__accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Малый бизнес
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$design_level_title['ru']?></th>
                                        <td><?=$design_level_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$mobile_title['ru']?></th>
                                        <td><?=$mobile_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$seo_title['ru']?><br><small><?=$seo_desc['ru']?></small></th>
                                        <td><?=$seo_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$copywriting_title['ru']?></th>
                                        <td><?=$copywriting_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$google_title['ru']?></th>
                                        <td><?=$google_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$price_title['ru']?></th>
                                        <td><?=$price_value_first['ru']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Средний бизнес
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$design_level_title['ru']?></th>
                                        <td><?=$design_level_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$mobile_title['ru']?></th>
                                        <td><?=$mobile_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$seo_title['ru']?><br><small><?=$seo_desc['ru']?></small></th>
                                        <td><?=$seo_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$copywriting_title['ru']?></th>
                                        <td><?=$copywriting_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$google_title['ru']?></th>
                                        <td><?=$google_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$price_title['ru']?></th>
                                        <td><?=$price_value_second['ru']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Крупный бизнес
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$design_level_title['ru']?></th>
                                        <td><?=$design_level_value_third['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$mobile_title['ru']?></th>
                                        <td><?=$mobile_value_third['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$seo_title['ru']?><br><small><?=$seo_desc['ru']?></small></th>
                                        <td><?=$seo_value_third['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$copywriting_title['ru']?></th>
                                        <td><?=$copywriting_value_third['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$google_title['ru']?></th>
                                        <td><?=$google_value_third['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$price_title['ru']?></th>
                                        <td><?=$price_value_third['ru']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 text-center">
                        <p class="price-calculator-option-desc">Savollar bormi? Qo'ng'iroq qiling!</p>
                        <br>
                        <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                            <?php the_site_setting_field('primary-phone-number') ?>
                        </a>
                    </div>
                    <div class="col-md-6 text-center mt-3">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Ishni boshlash</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php include 'partials/reviews.php'; ?>

<!-- Promo block -->
<section class="business-offer">
	<div class="container">
		<div class="business-offer-main-box">

			<div class="business-offer-content-box" style="">

				<h2 class="white-title text-uppercase">
                    <?php the_field('promo-warranty-title'); ?>
                </h2>
              
				<a href="#" class="btn cs-btn-one btn-gradient-color" data-toggle="modal" data-target="#get-quote">
                    <?php the_field('promo-warranty-btn-label'); ?>
				</a>
            </div>

    		<div class="business-offer-img-box">
    			<img src="<?php the_field('promo-warranty-img'); ?>">
    		</div>

        </div>
    </div>
</section>

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>
