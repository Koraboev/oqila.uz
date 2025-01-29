<?php 
$idea_num_title['uz'] = 'Taqdim etiladigan dizayn g’oyasi soni';
$idea_num_value_first['uz'] = '10';
$idea_num_value_second['uz'] = '20';
$idea_num_value_third['uz'] = '30';
///
$diseghners_title['uz'] = 'G’oya beruvchi dizaynerlar soni';
$disegners_value_first['uz'] = '1';
$disegners_value_second['uz'] = '2';
$disegners_value_third['uz'] = '3';
///
$rework_title['uz'] = 'Qayta ishlashlar soni';
$rework_value_first['uz'] = '3';
$rework_value_second['uz'] = '5';
$rework_value_third['uz'] = '8';
///
$price_title['uz'] = 'Sarmoya narxi';
$price_value_first['uz'] = '7,550,000  so’mdan ';
$price_value_second['uz'] = '9,550,000 so’mdan ';
$price_value_third['uz'] = '12,750,000 so’mdan ';

///RU

$idea_num_title['ru'] = 'Количество представленных дизайнерских идей';
$idea_num_value_first['ru'] = '10';
$idea_num_value_second['ru'] = '20';
$idea_num_value_third['ru'] = '30';
///
$diseghners_title['ru'] = 'Количество дизайнеров, придумавших идею';
$disegners_value_first['ru'] = '1';
$disegners_value_second['ru'] = '2';
$disegners_value_third['ru'] = '3';
///
$rework_title['ru'] = 'Количество обработки';
$rework_value_first['ru'] = '3';
$rework_value_second['ru'] = '5';
$rework_value_third['ru'] = '8';
///
$price_title['ru'] = 'Сумма инвестиций';
$price_value_first['ru'] = 'от 7,550,000  сум';
$price_value_second['ru'] = 'от 9,550,000 сум';
$price_value_third['ru'] = 'от 12,750,000 сум';


 ?>

<section class="detailed-price-section section section--dark" id="price-calculator-section">
    <div class="container">

        <?php if(pll_current_language() == 'uz'): ?>

            <h2 class="section__title-h2 section-title-light"><span>Logotip yasash</span> xizmati narxlari</h2>

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
                            <h4 class="section-title-light f-weight-600"><?=$idea_num_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$idea_num_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$idea_num_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$idea_num_value_third['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$diseghners_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$disegners_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$disegners_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$disegners_value_third['uz']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$rework_title['uz']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$rework_value_first['uz']?></td>
                        <td class="detailed-price-table__value"><?=$rework_value_second['uz']?></td>
                        <td class="detailed-price-table__value"><?=$rework_value_third['uz']?></td>
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
                                        <th><?=$idea_num_title['uz']?></th>
                                        <td><?=$idea_num_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$diseghners_title['uz']?></th>
                                        <td><?=$disegners_value_first['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$rework_title['uz']?></th>
                                        <td><?=$rework_value_first['uz']?></td>
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
                                        <th><?=$idea_num_title['uz']?></th>
                                        <td><?=$idea_num_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$diseghners_title['uz']?></th>
                                        <td><?=$disegners_value_second['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$rework_title['uz']?></th>
                                        <td><?=$rework_value_second['uz']?></td>
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
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                                Katta biznes
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$idea_num_title['uz']?></th>
                                        <td><?=$idea_num_value_third['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$diseghners_title['uz']?></th>
                                        <td><?=$disegners_value_third['uz']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$rework_title['uz']?></th>
                                        <td><?=$rework_value_third['uz']?></td>
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
           <h2 class="section__title-h2 section-title-light">Стоимость <span>изготовления логотипа</span></h2>

            <p class="section__text mrt-10">Для нас очень важна прозрачность. Вам необходимо точно знать, почему вы платите и что мы делаем.</p>

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
                            <h4 class="section-title-light f-weight-600"><?=$idea_num_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$idea_num_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$idea_num_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$idea_num_value_third['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$diseghners_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$disegners_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$disegners_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$disegners_value_third['ru']?></td>
                    </tr>

                    <tr>
                        <td>
                            <h4 class="section-title-light f-weight-600"><?=$rework_title['ru']?></h4>
                        </td>
                        <td class="detailed-price-table__value"><?=$rework_value_first['ru']?></td>
                        <td class="detailed-price-table__value"><?=$rework_value_second['ru']?></td>
                        <td class="detailed-price-table__value"><?=$rework_value_third['ru']?></td>
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
                                        <th><?=$idea_num_title['ru']?></th>
                                        <td><?=$idea_num_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$diseghners_title['ru']?></th>
                                        <td><?=$disegners_value_first['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$rework_title['ru']?></th>
                                        <td><?=$rework_value_first['ru']?></td>
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
                                        <th><?=$idea_num_title['ru']?></th>
                                        <td><?=$idea_num_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$diseghners_title['ru']?></th>
                                        <td><?=$disegners_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$rework_title['ru']?></th>
                                        <td><?=$rework_value_second['ru']?></td>
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
                            <button class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                                Большой бизнес
                            </button>
                        </h5>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body" id="no-more-tables">
                            <table class="table-mobile">
                                <tbody>
                                    <tr>
                                        <th><?=$idea_num_title['ru']?></th>
                                        <td><?=$idea_num_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$diseghners_title['ru']?></th>
                                        <td><?=$disegners_value_second['ru']?></td>
                                    </tr>
                                    <tr>
                                        <th><?=$rework_title['ru']?></th>
                                        <td><?=$rework_value_second['ru']?></td>
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
