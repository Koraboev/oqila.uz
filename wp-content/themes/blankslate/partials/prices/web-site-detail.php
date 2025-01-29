<?php
/*UZ*/

$seo_price_main_desc['uz'] = "Biz uchun ochiq-oydinlik juda muhim. Siz nima uchun pul to’layotganingizni va biz nimalar qilishimizni aniq bilishingiz kerak.";

$wb_imkoniyatlar['uz'] = 'Imkoniyatlar';
$sarmoya_narxi['uz'] = 'Sarmoya narxi (so’m)';
$sahifalar_soni['uz'] = 'Sahifalar soni';
$page_value_startup['uz'] = '5 ta';
$page_value_first['uz'] = '5 ta';
$page_value_second['uz'] = '10 ta';
$page_value_third['uz'] = '20 ta';
///
$design_level['uz'] = 'Dizayn darajasi';
$design_level_1['uz'] = 'Tayyor shablon asosida';
$design_level_2['uz'] = 'Malakali dizayner ustida ishlaydi';
$design_level_3['uz'] = 'Malakali dizayner ustida ishlaydi';
$design_level_4['uz'] = 'Malakali dizayner ustida ishlaydi';
///
$mobile_part_site['uz'] = 'Saytning mobil shakli';
$admin_in_site['uz'] = 'Saytning boshqaruv markazi';

$language_in_site['uz'] = 'Sayt tillari soni (o’zbek/rus)';
$lang_1['uz'] = '1 ta';
$lang_2['uz'] = '1 ta';
$lang_3['uz'] = '2 ta';
$lang_4['uz'] = '3 ta';

$request_form_in_telegram['uz'] = 'Telegramga ulangan buyurtma formasi';
$one_year_free_hosting['uz'] = '1 yillik bepul hosting';
$are_there_any_questions['uz'] = "Savollar bormi? Qo'ng'iroq qiling!";
$start_work['uz'] = 'Ishni boshlash';


/* ======================================================== */
/*RU*/
$seo_price_main_desc['ru'] = "Для нас очень важна прозрачность цен. Вы должны точно знать за что вы оплачиваете и что вы получите заказав продвижение сайта.";

$wb_imkoniyatlar['ru'] = 'Возможности';
$sarmoya_narxi['ru'] = 'Цена инвестиции (сум)';
$sahifalar_soni['ru'] = 'Количество страниц';
$page_value_startup['ru'] = '5 шт';
$page_value_first['ru'] = '5 шт';
$page_value_second['ru'] = '10 шт';
$page_value_third['ru'] = '20 шт';
///
$design_level['ru'] = 'Уровень дизайна';
$design_level_1['ru'] = 'По готовому шаблону';
$design_level_2['ru'] = 'Над дизайном работает опытный дизайнер';
$design_level_3['ru'] = 'Над дизайном работает опытный дизайнер';
$design_level_4['ru'] = 'Над дизайном работает опытный дизайнер';
///
$mobile_part_site['ru'] = 'Мобильная форма сайта';
$admin_in_site['ru'] = 'Центр управления сайтом';

$language_in_site['ru'] = 'Количество языков сайта (узбекский/русский)';
$lang_1['ru'] = '1 шт';
$lang_2['ru'] = '1 шт';
$lang_3['ru'] = '2 шт';
$lang_4['ru'] = '3 шт';

$request_form_in_telegram['ru'] = 'Форма заказа подключена к Telegram';
$one_year_free_hosting['ru'] = '1 год бесплатного хостинга';
///

$are_there_any_questions['ru'] = "Есть вопрос? Звоните специалисту прямо сейчас!";
$start_work['ru'] = "Начать работу";
?>

<section class="detailed-price-section section section--dark">
    <div class="container">

        <h2 class="section__title-h2 section-title-light"><?= get_field('wb-main-title') ?></h2>

        <p class="section__text mrt-10"><?= $seo_price_main_desc[$lang] ?></p>

        <div class="table-responsive detailed-price-table-box">
            <table class="table detailed-price-table detailed-price-table--dark mrt-30">

                <tr>
                    <td class="detailed-price-table__value"> <?= $wb_imkoniyatlar[$lang] ?></td>
                    <td class="detailed-price-table__value"><?= get_field('wb-title-1') ?></td>
                    <td class="detailed-price-table__value"><?= get_field('wb-title-2') ?></td>
                    <td class="detailed-price-table__value"><?= get_field('wb-title-3') ?></td>
                    <td class="detailed-price-table__value"><?= get_field('wb-title-4') ?></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"> <?= $sarmoya_narxi[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"><?= get_field('wb-price-1') ?></td>
                    <td class="detailed-price-table__value"><?= get_field('wb-price-2') ?></td>
                    <td class="detailed-price-table__value"><?= get_field('wb-price-3') ?></td>
                    <td class="detailed-price-table__value"><?= get_field('wb-price-4') ?></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?= $sahifalar_soni[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"> <?= $page_value_startup[$lang] ?> </td>
                    <td class="detailed-price-table__value"> <?= $page_value_first[$lang] ?> </td>
                    <td class="detailed-price-table__value"> <?= $page_value_second[$lang] ?> </td>
                    <td class="detailed-price-table__value"> <?= $page_value_third[$lang] ?> </td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?= $design_level[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"><?= $design_level_1[$lang] ?> </td>
                    <td class="detailed-price-table__value"><?= $design_level_2[$lang] ?> </td>
                    <td class="detailed-price-table__value"><?= $design_level_3[$lang] ?> </td>
                    <td class="detailed-price-table__value"><?= $design_level_4[$lang] ?> </td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?= $mobile_part_site[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?= $admin_in_site[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?= $language_in_site[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"><?= $lang_1[$lang] ?></td>
                    <td class="detailed-price-table__value"><?= $lang_2[$lang] ?></td>
                    <td class="detailed-price-table__value"><?= $lang_3[$lang] ?></td>
                    <td class="detailed-price-table__value"><?= $lang_4[$lang] ?></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?= $request_form_in_telegram[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?= $one_year_free_hosting[$lang] ?></h4>
                    </td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td>
                        <p class="price-calculator-option-desc"><?= $are_there_any_questions[$lang] ?></p>
                        <br>
                        <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                            <?php the_site_setting_field('primary-phone-number') ?>
                        </a>
                    </td>
                    <td class="detailed-price-table__value">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> <?= $start_work[$lang] ?></a>
                    </td>
                    <td class="detailed-price-table__value">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> <?= $start_work[$lang] ?></a>
                    </td>
                    <td class="detailed-price-table__value  detailed-price-table__value--dark">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> <?= $start_work[$lang] ?></a>
                    </td>
                    <td class="detailed-price-table__value">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> <?= $start_work[$lang] ?></a>
                    </td>
                </tr>

            </table>
        </div>

    </div>
</section>