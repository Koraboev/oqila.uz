<section class="detailed-price-section section section--dark">
    <div class="container">
        <h2 class="section__title-h2 section-title-light"><?=$seo_price_main_title[$lang]?></h2>

        <p class="section__text mrt-10"><?=$seo_price_main_desc[$lang]?></p>

        <div class="table-responsive detailed-price-table-box d-mob-none">
            <table class="table detailed-price-table detailed-price-table--dark mrt-30 ">
                <tr>
                    <td class="detailed-price-table__value"></td>
<!--                    <td class="detailed-price-table__value">--><?php //=$seo_plan_name_startup[$lang]?><!--</td>-->
                    <td class="detailed-price-table__value"><?=$seo_plan_name_first[$lang]?></td>
                    <td class="detailed-price-table__value"><?=$seo_plan_name_second[$lang]?></td>
                    <td class="detailed-price-table__value"><?=$seo_plan_name_third[$lang]?></td>
                </tr>
                
                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$google_keywords_title[$lang] ?></h4>
                    </td>
<!--                    <td class="detailed-price-table__value">--><?php //=$google_keywords_value_startup?><!--</td>-->
                    <td class="detailed-price-table__value"><?=$google_keywords_value_first?></td>
                    <td class="detailed-price-table__value"><?=$google_keywords_value_second?></td>
                    <td class="detailed-price-table__value"><?=$google_keywords_value_third?></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$business_audit_title[$lang]?></h4>
                    </td>
<!--                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>-->
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$site_audit_title[$lang]?></h4>
                    </td>
<!--                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>-->
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$income_keywords_title[$lang]?></h4>
                        <p class="price-calculator-option-desc"><?=$income_keywords_desc[$lang]?></p>

                    </td>
<!--                    <td class="detailed-price-table__value">Cluster 2.0<sup>TM</sup></td>-->
                    <td class="detailed-price-table__value">Cluster 2.0<sup>TM</sup></td>
                    <td class="detailed-price-table__value">Cluster 2.0<sup>TM</sup></td>
                    <td class="detailed-price-table__value">Cluster 2.0<sup>TM</sup></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$copywriting_title[$lang]?></h4>
                        <p class="price-calculator-option-desc"><?=$copywriting_desc[$lang]?></p>

                    </td>
<!--                    <td class="detailed-price-table__value">--><?php //=$copywriting_value_startup[$lang]?><!--</td>-->
                    <td class="detailed-price-table__value"><?=$copywriting_value_first[$lang]?></td>
                    <td class="detailed-price-table__value"><?=$copywriting_value_second[$lang]?></td>
                    <td class="detailed-price-table__value"><?=$copywriting_value_third[$lang]?></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$media_title[$lang]?></h4>
                    </td>
<!--                    <td class="detailed-price-table__value">--><?php //=$media_value_startup[$lang]?><!--</td>-->
                    <td class="detailed-price-table__value"><?=$media_value_first[$lang]?></td>
                    <td class="detailed-price-table__value"><?=$media_value_second[$lang]?></td>
                    <td class="detailed-price-table__value"><?=$media_value_third[$lang]?></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$site_report_title[$lang]?></h4>
                    </td>
<!--                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>-->
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                    <td class="detailed-price-table__value"><i class="fas fa-check"></i></td>
                </tr>

                <tr>
                    <td>
                        <h4 class="section-title-light f-weight-600"><?=$price_title[$lang]?></h4>
                        <p class="price-calculator-option-desc"><?=$price_desc[$lang]?></p>
                    </td>
<!--                    <td class="detailed-price-table__value">--><?php //=$price_value_startup?><!--</td>-->
                    <td class="detailed-price-table__value"><?=$price_value_first?></td>
                    <td class="detailed-price-table__value"><?=$price_value_second?></td>
                    <td class="detailed-price-table__value"><?=$price_value_third?></td>
                </tr>

                <tr>
                    <td>
                        <p class="price-calculator-option-desc"><?=$call_now[$lang]?></p>
                        <br>
                        <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                            <?php the_site_setting_field('primary-phone-number') ?>
                        </a>
                    </td>
<!--                    <td class="detailed-price-table__value">-->
<!--                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> --><?php //=$call_to_action[$lang]?><!--</a>-->
<!--                    </td>-->
                    <td class="detailed-price-table__value">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> <?=$call_to_action[$lang]?></a>
                    </td>
                    <td class="detailed-price-table__value  detailed-price-table__value--dark">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> <?=$call_to_action[$lang]?></a>
                    </td>
                    <td class="detailed-price-table__value">
                        <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"> <?=$call_to_action[$lang]?></a>
                    </td>
                </tr>

            </table>
        </div>
        <div id="accordion" class="detailed-price-table__accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <a href="#accordion" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?=$seo_plan_name_first[$lang]?>
                        </a>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body" id="no-more-tables">
                        <table class="table-mobile">
                            <tbody>
                                <tr>
                                    <th><?=$google_keywords_title[$lang]?></th>
                                    <td><?=$google_keywords_value_first?></td>
                                </tr>
                                <tr>
                                    <th><?=$business_audit_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$site_audit_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$income_keywords_title[$lang]?><br><small><?=$income_keywords_desc[$lang]?></small></th>
                                    <td>Cluster 2.0<sup>TM</sup></td>
                                </tr>
                                <tr>
                                    <th><?=$copywriting_title[$lang]?> <br><small><?=$copywriting_desc[$lang]?></small></th>
                                    <td><?=$copywriting_value_first[$lang]?></td>
                                </tr>
                                <tr>
                                    <th><?=$media_title[$lang]?></th>
                                    <td><?=$media_value_first[$lang]?></td>
                                </tr>
                                <tr>
                                    <th><?=$site_report_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$price_title[$lang]?> <br><small><?=$price_desc[$lang]?></small></th>
                                    <td><?=$price_value_first?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <a href="#accordion" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <?=$seo_plan_name_second[$lang]?>
                        </a>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body" id="no-more-tables">
                        <table class="table-mobile">
                            <tbody>
                                <tr>
                                    <th><?=$google_keywords_title[$lang]?></th>
                                    <td><?=$google_keywords_value_second?></td>
                                </tr>
                               
                                <tr>
                                    <th><?=$business_audit_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$site_audit_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$income_keywords_title[$lang]?><br><small><?=$income_keywords_desc[$lang]?></small></th>
                                    <td>Cluster 2.0<sup>TM</sup></td>
                                </tr>
                                <tr>
                                    <th><?=$copywriting_title[$lang]?> <br><small><?=$copywriting_desc[$lang]?></small></th>
                                    <td><?=$copywriting_value_second[$lang]?></td>
                                </tr>
                                <tr>
                                    <th><?=$media_title[$lang]?></th>
                                    <td><?=$media_value_second[$lang]?></td>
                                </tr>
                                <tr>
                                    <th><?=$site_report_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$price_title[$lang]?> <br><small><?=$price_desc[$lang]?></small></th>
                                    <td><?=$price_value_second?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <a href="#accordion" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <?=$seo_plan_name_third[$lang]?>
                        </a>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body" id="no-more-tables">
                        <table class="table-mobile">
                            <tbody>
                                <tr>
                                    <th><?=$google_keywords_title[$lang]?></th>
                                    <td><?=$google_keywords_value_third?></td>
                                </tr>
                              
                                <tr>
                                    <th><?=$business_audit_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$site_audit_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$income_keywords_title[$lang]?><br><small><?=$income_keywords_desc[$lang]?></small></th>
                                    <td>Cluster 2.0<sup>TM</sup></td>
                                </tr>
                                <tr>
                                    <th><?=$copywriting_title[$lang]?> <br><small><?=$copywriting_desc[$lang]?></small></th>
                                    <td><?=$copywriting_value_third[$lang]?></td>
                                </tr>
                                <tr>
                                    <th><?=$media_title[$lang]?></th>
                                    <td><?=$media_value_third[$lang]?></td>
                                </tr>
                                <tr>
                                    <th><?=$site_report_title[$lang]?></th>
                                    <td><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <th><?=$price_title[$lang]?> <br><small><?=$price_desc[$lang]?></small></th>
                                    <td><?=$price_value_third?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 text-center">
                    <p class="price-calculator-option-desc"> <?=$call_now[$lang]?> </p>
                    <br>
                    <a class="detailed-price-table__link mrt-20" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                        <?php the_site_setting_field('primary-phone-number') ?>
                    </a>
                </div>
                <div class="col-md-6 text-center mt-3">
                    <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote"><?=$call_to_action[$lang]?></a>
                </div>
            </div>
        </div>
    </div>
</section>