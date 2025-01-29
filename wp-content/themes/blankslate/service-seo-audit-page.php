<?php
/**
 * Template Name: SEO AUDIT PAGE
 * Template Post Type: service-pages
 */
$deadline_title['uz'] = 'Bajarish muddati';
$deadline_value_first['uz'] = '30 kun';
$deadline_value_second['uz'] = '45 kun';
///
$page_audit_title['uz'] = 'Tahlil qilinadigan sahifalar soni';
$page_audit_value_first['uz'] = '30';
$page_audit_value_second['uz'] = '70';
///
$full_audit_title['uz'] = 'To’liq tahlil natijasi bo’yicha hisobot';
$full_audit_value_first['uz'] = '<i class="fas fa-check"></i>';
$full_audit_value_second['uz'] = '<i class="fas fa-check"></i>';
///
$page_repair_title['uz'] = 'Tahlil natijalari bo’yicha saytni tuzatish mahlahati';
$page_repair_value_first['uz'] = '45 minut';
$page_repair_value_second['uz'] = '2.5 soat';
///
$full_tech_audit_title['uz'] = 'To’liq texnik tahlil';
$full_tech_audit_value_first['uz'] = '<i class="fas fa-check"></i>';
$full_tech_audit_value_second['uz'] = '<i class="fas fa-check"></i>';
///
$keyword_title['uz'] = 'Kalit iboralar to’plamini tuzish';
$keyword_value_first['uz'] = '<i class="fas fa-minus"></i>';
$keyword_value_second['uz'] = '50 tagacha ibora';
///
$new_site_title['uz'] = 'Yangi sayt tuzilishini ishlab chiqish';
$new_site_value_first['uz'] = '<i class="fas fa-minus"></i>';
$new_site_value_second['uz'] = '<i class="fas fa-check"></i>';
///
$text_seo_title['uz'] = 'Matnlarni SEOga moslanganlik darajasi';
$text_seo_value_first['uz'] = '<i class="fas fa-minus"></i>';
$text_seo_value_second['uz'] = '<i class="fas fa-check"></i>';
///
$href_title['uz'] = 'Kiruvchi havolalar tahlili';
$href_value_first['uz'] = '<i class="fas fa-minus"></i>';
$href_value_second['uz'] = '<i class="fas fa-check"></i>';
///
$price_title['uz'] = 'Sarmoya narxi';
$price_value_first['uz'] = '3,292,000 so’m';
$price_value_second['uz'] = '4,811,000 so’m';

///RU

$deadline_title['ru'] = 'Время завершения';
$deadline_value_first['ru'] = '30 дней';
$deadline_value_second['ru'] = '45 дней';
///
$page_audit_title['ru'] = 'Количество страниц для анализа';
$page_audit_value_first['ru'] = '30';
$page_audit_value_second['ru'] = '70';
///
$full_audit_title['ru'] = 'Количество страниц для анализа';
$full_audit_value_first['ru'] = '<i class="fas fa-check"></i>';
$full_audit_value_second['ru'] = '<i class="fas fa-check"></i>';
///
$page_repair_title['ru'] = 'Сайт по результатам анализа (совет по исправлению)';
$page_repair_value_first['ru'] = '45 минут';
$page_repair_value_second['ru'] = '2.5 часов';
///
$full_tech_audit_title['ru'] = 'Полный технический анализ';
$full_tech_audit_value_first['ru'] = '<i class="fas fa-check"></i>';
$full_tech_audit_value_second['ru'] = '<i class="fas fa-check"></i>';
///
$keyword_title['ru'] = 'Создание набора ключевых фраз';
$keyword_value_first['ru'] = '<i class="fas fa-minus"></i>';
$keyword_value_second['ru'] = 'до 50 штук';
///
$new_site_title['ru'] = 'Разработка новой структуры сайта';
$new_site_value_first['ru'] = '<i class="fas fa-minus"></i>';
$new_site_value_second['ru'] = '<i class="fas fa-check"></i>';
///
$text_seo_title['ru'] = 'Адаптивность текстов к SEO';
$text_seo_value_first['ru'] = '<i class="fas fa-minus"></i>';
$text_seo_value_second['ru'] = '<i class="fas fa-check"></i>';
///
$href_title['ru'] = 'Внешняя информация о сайте из источников';
$href_value_first['ru'] = '<i class="fas fa-minus"></i>';
$href_value_second['ru'] = '<i class="fas fa-check"></i>';
///
$price_title['ru'] = 'Сумма инвестиций';
$price_value_first['ru'] = '3,292,000 сум';
$price_value_second['ru'] = '4,811,000 сум';


$lang = pll_current_language();

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>



<!-- Prices -->
<?php include 'partials/prices/audit.php'; ?>

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

            <h2 class="section__title-h2 section-title-light">SEO-tahlil tariflari</h2>

            <p class="section__text mrt-10">Biz uchun ochiq-oydinlik juda muhim. Siz nima uchun pul to’layotganingizni va biz nimalar qilishimizni aniq bilishingiz kerak.</p>

            <div class="table-responsive detailed-price-table-box">
                <table class="table detailed-price-table detailed-price-table--dark mrt-30">
                    
                    <tr>
                        <td class="detailed-price-table__value"></td>
                        <td class="detailed-price-table__value">Oddiy</td>
                        <td class="detailed-price-table__value">Murakkab</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$deadline_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$deadline_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$deadline_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$page_audit_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$page_audit_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$page_audit_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$full_audit_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$full_audit_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$full_audit_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$page_repair_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$page_repair_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$page_repair_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$full_tech_audit_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$full_tech_audit_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$full_tech_audit_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$keyword_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$keyword_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$keyword_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$new_site_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$new_site_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$new_site_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$text_seo_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$text_seo_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$text_seo_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$href_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$href_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$href_value_second['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$price_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$price_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$price_value_second['uz']?></td>
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
                    </tr>

                </table>
            </div>
            <div id="accordion" class="detailed-price-table__accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Oddiy
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$deadline_title['uz']?></th>
                                        <td><?=$deadline_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_audit_title['uz']?></th>
                                        <td><?=$page_audit_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_audit_title['uz']?></th>
                                        <td><?=$full_audit_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_repair_title['uz']?></th>
                                        <td><?=$page_repair_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_tech_audit_title['uz']?></th>
                                        <td><?=$full_tech_audit_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$keyword_title['uz']?></th>
                                        <td><?=$keyword_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$new_site_title['uz']?></th>
                                        <td><?=$new_site_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$text_seo_title['uz']?></th>
                                        <td><?=$text_seo_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$href_title['uz']?></th>
                                        <td><?=$href_value_first['uz']?></td>
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
                                Murakkab
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$deadline_title['uz']?></th>
                                        <td><?=$deadline_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_audit_title['uz']?></th>
                                        <td><?=$page_audit_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_audit_title['uz']?></th>
                                        <td><?=$full_audit_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_repair_title['uz']?></th>
                                        <td><?=$page_repair_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_tech_audit_title['uz']?></th>
                                        <td><?=$full_tech_audit_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$keyword_title['uz']?></th>
                                        <td><?=$keyword_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$new_site_title['uz']?></th>
                                        <td><?=$new_site_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$text_seo_title['uz']?></th>
                                        <td><?=$text_seo_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$href_title['uz']?></th>
                                        <td><?=$href_value_second['uz']?></td>
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
             <h2 class="section__title-h2 section-title-light">Тарифы на SEO-аудит</h2>

            <p class="section__text mrt-10">Для нас очень важна прозрачность. Вам необходимо точно знать, почему вы платите и что мы делаем.</p>

            <div class="table-responsive detailed-price-table-box">
                <table class="table detailed-price-table detailed-price-table--dark mrt-30">
                    
                    <tr>
                        <td class="detailed-price-table__value"></td>
                        <td class="detailed-price-table__value">Простой</td>
                        <td class="detailed-price-table__value">Сложный</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$deadline_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$deadline_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$deadline_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$page_audit_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$page_audit_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$page_audit_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$full_audit_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$full_audit_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$full_audit_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$page_repair_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$page_repair_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$page_repair_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$full_tech_audit_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$full_tech_audit_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$full_tech_audit_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$keyword_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$keyword_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$keyword_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$new_site_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$new_site_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$new_site_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$text_seo_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$text_seo_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$text_seo_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$href_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$href_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$href_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$price_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$price_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$price_value_second['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <p class="price-calculator-option-desc">Если есть вопросы, не ждите. Звоните специалисту прямо сейчас!</p>
                            <br>
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
                    </tr>

                </table>
            </div>
            <div id="accordion" class="detailed-price-table__accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Простой
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$deadline_title['ru']?></th>
                                        <td><?=$deadline_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_audit_title['ru']?></th>
                                        <td><?=$page_audit_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_audit_title['ru']?></th>
                                        <td><?=$full_audit_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_repair_title['ru']?></th>
                                        <td><?=$page_repair_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_tech_audit_title['ru']?></th>
                                        <td><?=$full_tech_audit_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$keyword_title['ru']?></th>
                                        <td><?=$keyword_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$new_site_title['ru']?></th>
                                        <td><?=$new_site_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$text_seo_title['ru']?></th>
                                        <td><?=$text_seo_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$href_title['ru']?></th>
                                        <td><?=$href_value_first['ru']?></td>
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
                                Сложный
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$deadline_title['ru']?></th>
                                        <td><?=$deadline_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_audit_title['ru']?></th>
                                        <td><?=$page_audit_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_audit_title['ru']?></th>
                                        <td><?=$full_audit_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$page_repair_title['ru']?></th>
                                        <td><?=$page_repair_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$full_tech_audit_title['ru']?></th>
                                        <td><?=$full_tech_audit_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$keyword_title['ru']?></th>
                                        <td><?=$keyword_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$new_site_title['ru']?></th>
                                        <td><?=$new_site_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$text_seo_title['ru']?></th>
                                        <td><?=$text_seo_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$href_title['ru']?></th>
                                        <td><?=$href_value_second['ru']?></td>
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
                <div class="row mt-5">
                    <div class="col-md-6 text-center">
                        <p class="price-calculator-option-desc">Если есть вопросы, не ждите. Звоните специалисту прямо сейчас!</p>
                        <br>
                        <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                            <?php the_site_setting_field('primary-phone-number') ?>
                        </a>
                    </div>
                    <div class="col-md-6 text-center mt-3">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Начать работу</a>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    </div>
</section>

<section class="about-section skyscraper-text anim-object pdt-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6">
                <div class="about-image-block mrb-lg-60">
                    <img class="img-full" src="<?php the_field('site-as-tree-img'); ?>">
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <h2 class="title-under-line mrb-70"><?php the_field('site-as-tree-title'); ?></h2>
                
                <?php the_field('site-as-tree-desc'); ?>
                
                <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"><?php the_field('site-as-tree-btn-label'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Promo block -->
<section class="business-offer">
	<div class="container">
		<div class="business-offer-main-box">

			<div class="business-offer-content-box" style="">

				<h2 class="white-title text-uppercase business-offer-title">
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
