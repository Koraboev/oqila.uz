<section class="price-section section" id="price-calculator-section">
    <div class="container">
        <div class="row justify-content-md-center">
         <?php
            $price_value_firs = str_replace(['so’m', 'сум'], '', $price_value_first);
            $price_value_secon = str_replace(['so’m', 'сум'], '', $price_value_second);
            $price_value_thir = str_replace(['so’m', 'сум'], '', $price_value_third);
            ?>
            <?php if(pll_current_language() == 'uz'): ?>
                <div class="col-md-4 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Kichik biznes</h4>
                            <h3 class="price">
                                <?= $price_value_firs['uz'] ?>
                                <span class="price-currency">so'm</span>
                                <br>
                                <span class="price-duration">Sarmoya narxi</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <li>Dizayn darajasi</li>
                                <li><h4>Oddiy</h4></li>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Buyurtma berish</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">O’rta biznes</h4>
                            <h3 class="price">
                                <?= $price_value_secon['uz'] ?>
                                <span class="price-currency">so'm</span>
                                <br>
                                <span class="price-duration">Sarmoya narxi</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <li>Dizayn darajasi</li>
                                <li><h4>Yuqori</h4></li>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Buyurtma berish</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Katta biznes</h4>
                            <h3 class="price">
                                <?= $price_value_thir['uz'] ?>
                                <span class="price-currency">so'm</span>
                                <br>
                                <span class="price-duration">Sarmoya narxi</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <li>Dizayn darajasi</li>
                                <li><h4>Maxsus</h4></li>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Buyurtma berish</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                 <div class="col-md-4 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Малый бизнес</h4>
                            <h3 class="price">
                                <?= $price_value_firs['ru'] ?>
                                <span class="price-currency">сум</span>
                                <br>
                                <span class="price-duration">Сумма инвестиций</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <li>Уровень дизайна</li>
                                <li><h4>Простой</h4></li>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Заказать</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Средний бизнес</h4>
                            <h3 class="price">
                                <?= $price_value_secon['ru'] ?>
                                <span class="price-currency">сум</span>
                                <br>
                                <span class="price-duration">Сумма инвестиций</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <li>Уровень дизайна</li>
                                <li><h4>Высокий</h4></li>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Заказать</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="price-table mrb-30 text-center">
                        <div class="table-header">
                            <h4 class="pricing-plan-name">Крупный бизнес</h4>
                            <h3 class="price">
                                <?= $price_value_thir['ru'] ?>
                                <span class="price-currency">сум</span>
                                <br>
                                <span class="price-duration">Сумма инвестиций</span>
                            </h3>
                        </div>
                        <div class="table-content">
                            <ul class="list-items">

                                <li>Уровень дизайна</li>
                                <li><h4>Специальный</h4></li>

                            </ul>
                        </div>
                        <div class="table-footer">
                            <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">Заказать</a>
                        </div>
                    </div>
                </div>
            <?php endif ?>

        </div>
    </div>
</section>