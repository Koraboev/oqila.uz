<?php
$lang = pll_current_language();
$somdan = $lang == 'ru' ? 'от сум' : ($lang == 'en' ? 'from soum' : 'so\'mdan');
$an_order['uz'] = 'Buyurtma berish';
$an_order['ru'] = 'Заказать сейчас';
$an_order['en'] = 'Order now';
?>

<section class="price-section section" id="price-calculator-section">
    <div class="container">

        <div >
            <h2 class="section__title-h2 section-title-black mb-5 o_site"><?= get_field('wb-main-title') ?></h2>
        </div>

        <div class="row justify-content-md-center">

                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name"><?= get_field('wb-title-1') ?></h4>
                            <h3 class="price">
                                <?= get_field('wb-price-1') ?>
                                  <br>
                                <span class="price-currency"><?= $somdan ?></span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <?= get_field('wb-desc-1') ?>


                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"><?= $an_order[$lang] ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name"><?= get_field('wb-title-2') ?></h4>
                            <h3 class="price">
                                <?= get_field('wb-price-2') ?><br>
                                <span class="price-currency"><?= $somdan ?></span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <?= get_field('wb-desc-2') ?>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"><?= $an_order[$lang] ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name"><?=get_field('wb-title-3') ?></h4>
                            <h3 class="price">
                                <?= get_field('wb-price-3') ?><br>
                                <span class="price-currency"><?= $somdan ?></span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <?= get_field('wb-desc-3') ?>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"><?= $an_order[$lang] ?></a>
                        </div>
                    </div>
                </div>
                <?php if (get_field('wb-title-4')) { ?>
                <div class="col-md-3 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name"><?= get_field('wb-title-4') ?></h4>
                            <h3 class="price">
                                <?= get_field('wb-price-4') ?><br>
                                <span class="price-currency"><?= $somdan ?></span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <?= get_field('wb-desc-4') ?>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"><?= $an_order[$lang] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>