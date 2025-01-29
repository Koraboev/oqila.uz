<?php
/**
 * Template Name: SEO COPY PAGE
 * Template Post Type: service-pages
 */

$lang = pll_current_language();

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>



<!-- Prices -->
<?php include 'partials/prices/copy.php'; ?>

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

            <h2 class="section__title-h2 section-title-light"><span>SEO kopirayting</span> xizmati tariflari</h2>

            <p class="section__text mrt-10">Biz uchun ochiq-oydinlik juda muhim. Siz nima uchun pul to’layotganingizni va biz nimalar qilishimizni aniq bilishingiz kerak.</p>

            <div class="table-responsive">
                <table class="table detailed-price-table detailed-price-table--dark mrt-30">
                    
                    <tr>
                        <td class="detailed-price-table__value"></td>
                        <td class="detailed-price-table__value">Sayt uchun matn yozish</td>
                        <td class="detailed-price-table__value">Sotuvni oshirish uchun web sahifani yangilash</td>
                        <td class="detailed-price-table__value">Katta hajmda maqola yozish (osmon o’par)</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Hajmi</h4>
                        </td>
                        <td class="detailed-price-table__value">500 ta so’z</td>
                        <td class="detailed-price-table__value">1,000 ta so’z</td>
                        <td class="detailed-price-table__value">1,800 - 2,000 ta so’z</td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Mijozni jalb qiladigan uslibda yoziladi</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Kalit iboralar tahlili (SEO)</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Tashqi va ichki havolalar joylashtirish</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Rasmlar tayyorlash</h4>
                        </td>

                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value">3 tagacha banner</td>
                        <td class="detailed-price-table__value">3 tagacha infografika</td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Rasmlarni optimallash</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Tajribali muharrir ko’rib chiqadi</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">HTML formatlash va saytga joylashtirish</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Sarmoya narxi</h4>

                        </td>
                        <td class="detailed-price-table__value">254,000 so’m</td>
                        <td class="detailed-price-table__value">1,356,000 so’m</td>
                        <td class="detailed-price-table__value">1,428,000 so’m</td>
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

        <?php else: ?>
                        <h2 class="section__title-h2 section-title-light">Тарифы на услуги <span>SEO копирайтинга</span></h2>

            <p class="section__text mrt-10">Для нас очень важна прозрачность. Вам нужно точно знать, почему вы платите и что мы делаем.</p>

            <div class="table-responsive">
                <table class="table detailed-price-table detailed-price-table--dark mrt-30">
                    
                    <tr>
                        <td class="detailed-price-table__value"></td>
                        <td class="detailed-price-table__value">Написать текст для сайта</td>
                        <td class="detailed-price-table__value">Обновить свой сайт, чтобы увеличить продажи</td>
                        <td class="detailed-price-table__value">Написать большую статью (небоскреб)</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Hajmi</h4>
                        </td>
                        <td class="detailed-price-table__value">500 слов</td>
                        <td class="detailed-price-table__value">1,000 слов</td>
                        <td class="detailed-price-table__value">1,800 - 2,000 слов</td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Написано в стиле, который привлекает покупателя.</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Анализ ключевых фраз (SEO)</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Размещение внешних и внутренних ссылок</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Изготовление картинок</h4>
                        </td>

                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value">до 3-х баннеров</td>
                        <td class="detailed-price-table__value">до 3-х инфографики</td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Оптимизация изображений </h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Отзыв опытного редактора</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Форматирование HTML и размещение сайта</h4>
                        </td>
                        <td class="detailed-price-table__value"><i class="fas fa-minus"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                        <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600">Сумма инвестиций</h4>

                        </td>
                        <td class="detailed-price-table__value">254,000 сум</td>
                        <td class="detailed-price-table__value">1,356,000 сум</td>
                        <td class="detailed-price-table__value">1,428,000 сум</td>
                    </tr>

                    <tr>
                        <td>
                            <p class="price-calculator-option-desc">Если вопросы, не ждите. Звоните специалисту прямо сейчас.</p><br>
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
        <?php endif; ?>

    </div>
</section>

<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>
