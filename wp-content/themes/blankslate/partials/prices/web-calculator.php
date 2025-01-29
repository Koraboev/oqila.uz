<?php
$lang = pll_current_language();

/////////
$page_count_label['uz'] = 'Sahifalar soni';
$page_count_label['ru'] = 'Количество страниц';

$page_count_options = ['1-5','5-15','15-35'];

/////////
$design_level_label['uz'] = 'Dizayn darajasi';
$design_level_label['ru'] = 'Уровень дизайна';

$design_level_options['uz'] = ['Oddiy',   'Yuqori',  'Maxsus'];
$design_level_options['ru'] = ['Простой', 'Высокий', 'Особый'];

/////////
$responsive_design_label['uz'] = 'Saytning mobil shakli';
$responsive_design_label['ru'] = 'Мобильная версия сайта';

$responsive_design_options['uz'] = ["Yo'q",       'Mavjud'];
$responsive_design_options['ru'] = ['Не имеется', 'Включена'];

/////////
$cms_label['uz'] = 'Sayt boshqaruv tizimi';
$cms_label['ru'] = 'Система управления сайтом';

$cms_desc = '(CMS)';

$cms_options['uz'] = ['Shart  emas',   'Standard',    'Murakkab imkoniyatlar'];
$cms_options['ru'] = ['Не требуется', 'Стандартный', 'Расширенный'];

/////////
$lang_label['uz'] = "Sayt tillari soni";
$lang_label['ru'] = 'Количество языков';

$lang_desc['uz'] = "(O'zbekcha, Ruscha, Inglizcha)";
$lang_desc['ru'] = "(Узбекский, Русский, Английский)";

$lang_options = ['1', '2', '3'];

/////////
$ecommerce_label['uz'] = "Internet do'kon imkoniyati";
$ecommerce_label['ru'] = 'Возможности интернет магазина';

$ecommerce_options['uz'] = ['Shart  emas',   'Xarid savati', 'Xarid savati + Payme/Click'];
$ecommerce_options['ru'] = ['Не требуется', 'Корзинка',     'Корзинка + Payme/Click'];

/////////
$copy_label['uz'] = 'Matn yozish';
$copy_label['ru'] = 'Написание текста';

$copy_desc['uz'] = '(Copywriting narxi web sahifalar uchun berilgan)';
$copy_desc['ru'] = '(Услуги копирайтера предназначена для веб страниц)';

$copy_options['uz'] = ['Shart  emas',   '2-5 ta sahifa', '5-10 ta <br> sahifa'];
$copy_options['ru'] = ['Не требуется', '2-5 страниц',   '5-10 страниц'];

/////////
$seo_label['uz'] = 'SEO xizmat';
$seo_label['ru'] = 'SEO услуга';

$seo_desc['uz'] = '(Googleda saytni yuqoriga olib chiqish va uni daromad olib keladigan qilish)';
$seo_desc['ru'] = '(Поднятие позиция сайта в Google естественном путем)';

$seo_options['uz'] = ['Shart  emas',   '40 kalit ibora',   '90 kalit <br> ibora'];
$seo_options['ru'] = ['Не требуется', '40 ключевых фраз', '90 ключевых фраз'];

//////// General
$main_title = get_field('price-calculator-title');
if(empty($main_title))
    $main_title = ($lang == 'uz') ? '<span>Sayt yaratish</span> narxlari kalkulyatori' : 'КАЛЬКУЛЯТОР СТОИМОСТИ <span>РАЗРАБОТКИ САЙТОВ</span>';

$btn_calculate_label['uz'] = 'Hisoblash';
$btn_calculate_label['ru'] = 'Рассчитать';

$btn_send_label['uz'] = 'Aniq narxni bilish';
$btn_send_label['ru'] = 'Узнать точную цену';

$btn_recalculate_label['uz'] = 'Qayta hisoblash';
$btn_recalculate_label['ru'] = 'Рассчитать заново';

?>

<script type="text/javascript">

<?php if ($lang == 'uz'): ?>
    result_msg = [
        "<span>Sayt narxi:</span> <span id='pre-discount-price'></span><br>", // 0
        "SEO va saytga birga buyurtma bersangiz, sayt uchun <span>10%</span> chegirma beriladi.", // 1
        "<?php the_site_setting_field('web-discount-desc-uz'); ?>", // 2
        "<span>Chegirmali narx:</span> <span id='final-price'></span><br><span>SEO narxi:</span> <span id='seo-price'></span> oyiga", // 3
        "" // 4
    ];
<?php else: ?>
    result_msg = [
        "<span>Стоимость сайта:</span> <span id='pre-discount-price'></span><br>", // 0
        "SEO va saytga birga buyurtma bersangiz, sayt uchun <span>10%</span> chegirma beriladi.", // 1
        "<?php the_site_setting_field('web-discount-desc-ru'); ?>", // 2
        "<span>Стоимость со скидкой:</span> <span id='final-price'></span><br><span>Цена SEO:</span> <span id='seo-price'></span> за месяц", // 3
        "" // 4
    ];
<?php endif ?>

    web_discount = <?=(int)the_site_setting_field('web-discount', true)?>;
    web_discount_deadline = "<?=get_web_discount_deadline()?>";
</script>

<section class="section section--dark" id="price-calculator-section-on">
    <div class="container">

        <div class="price-calculator-title-wrapper">
            <h2 class="section-title-light price-calculator-title">
                <?=$main_title?>
            </h2>
        </div>

        <div class="price-calculator mrt-100">
            <!-- page -->
            <div id="page-count" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12">
                   <h4 class="section-title-light f-weight-600"><?=$page_count_label[$lang]?></h4>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($page_count_options as $i => $option): ?>
                            <input id="page-count-<?=$i?>" name="page-count" type="radio" <?php if($i==0) echo "checked"; ?>  value="<?=$i?>">
                            <label for="page-count-<?=$i?>" class="label-page-count-<?=$i?>"><?=$option?></label>
                        <?php endforeach?>
                    </div>
                </div>
            </div>

            <!-- design -->
            <div id="design-level" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12">
                   <h4 class="section-title-light f-weight-600"><?=$design_level_label[$lang]?></h4>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($design_level_options[$lang] as $i => $option): ?>
                            <input id="design-level-<?=$i?>" name="design-level" type="radio" <?php if($i==1) echo "checked"; ?> value="<?=$i?>">
                            <label for="design-level-<?=$i?>" class="label-design-level-<?=$i?>"><?=$option?></label>
                        <?php endforeach?>
                    </div>
                </div>
            </div>

            <!-- mobile -->
            <div id="responsive-design" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12">
                   <h4 class="section-title-light f-weight-600"><?=$responsive_design_label[$lang]?></h4>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($responsive_design_options[$lang] as $i => $option): ?>
                            <input id="responsive-design-<?=$i?>" name="responsive-design" type="radio" <?php if($i==1) echo "checked"; ?> value="<?=$i?>">
                            <label for="responsive-design-<?=$i?>" class="label-responsive-design-<?=$i?>"><?=$option?></label>
                        <?php endforeach?>
                    </div>
                </div>
            </div>

            <!-- cms -->
            <div id="cms" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12">
                   <h4 class="section-title-light f-weight-600"><?=$cms_label[$lang]?></h4>
                   <p class="price-calculator-option-desc"><?=$cms_desc?></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($cms_options[$lang] as $i => $option): ?>
                            <input id="cms-<?=$i?>" name="cms" type="radio" <?php if($i==1) echo "checked"; ?> value="<?=$i?>">
                            <label for="cms-<?=$i?>" class="label-cms-<?=$i?> label-full-width"><?=$option?></label>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- lang -->
            <div id="lang" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12">
                   <h4 class="section-title-light f-weight-600"><?=$lang_label[$lang]?></h4>
                   <p class="price-calculator-option-desc"><?=$lang_desc[$lang]?></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($lang_options as $i => $option): ?>
                            <input id="lang-<?=$i?>" name="lang" type="radio" <?php if($i==0) echo "checked"; ?> value="<?=$i?>">
                            <label for="lang-<?=$i?>" class="label-lang-<?=$i?>"><?=$option?></label>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- ecommerce -->
            <div id="ecommerce" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12 mb-5">
                   <h4 class="section-title-light f-weight-600"><?=$ecommerce_label[$lang]?></h4>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($ecommerce_options[$lang] as $i => $option): ?>
                            <input id="ecommerce-<?=$i?>" name="ecommerce" type="radio" <?php if($i==0) echo "checked"; ?> value="<?=$i?>">
                            <label for="ecommerce-<?=$i?>" class="label-ecommerce-<?=$i?> label-full-width"><?=$option?></label>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- copy -->
            <div id="copy" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12">
                   <h4 class="section-title-light f-weight-600"><?=$copy_label[$lang]?></h4>
                   <p class="price-calculator-option-desc"><?=$copy_desc[$lang]?></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($copy_options[$lang] as $i => $option): ?>
                            <input id="copy-<?=$i?>" name="copy" type="radio" <?php if($i==0) echo "checked"; ?> value="<?=$i?>">
                            <label for="copy-<?=$i?>" class="label-copy-<?=$i?> label-full-width"><?=$option?></label>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- seo -->
            <div id="seo" class="row mrt-40 mrb-100">
                <div class="col-md-3 col-sm-12 mb-5">
                    <h4 class="section-title-light f-weight-600"><?=$seo_label[$lang]?></h4>
                    <p class="price-calculator-option-desc"><?=$seo_desc[$lang]?></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="slider">
                        <?php foreach($seo_options[$lang] as $i => $option): ?>
                            <input id="seo-<?=$i?>" name="seo" type="radio" <?php if($i==0) echo "checked"; ?> value="<?=$i?>">
                            <label for="seo-<?=$i?>" class="label-seo-<?=$i?> label-full-width"><?=$option?></label>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9 col-sm-12 text-right">
                    <a class="btn btn-primary btn-long cs-btn-one btn-gradient-color" href="#" onclick="calculate_price(result_msg, web_discount, web_discount_deadline);return false;" id="btn-calculate-price"><?=$btn_calculate_label[$lang]?></a>
                </div>
            </div>
        </div>

        <div class="price-calculator-result mrt-30">
            <div class="price-calculator-title-wrapper mrb-70">
                <p id='price-calculator-result-msg'></p>
            </div>

            <div class="row">
                <div class="col-md-9 col-sm-12">

                    <form method='post' action='<?=get_qoute_url()?>'>
                        <div class="form-row">
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <label for="first-name"><?php the_quote_field('form-first-name') ?>: * </label>
                                <input type="text" class="form-control" id="first-name" name="first-name" required>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <label for="phone-number"><?php the_quote_field('form-phone-number') ?>: * </label>
                                <input type="tel" class="form-control" id="phone-number" name="phone-number" required>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <label for="company-name"><?php the_quote_field('form-company-name') ?>: * </label>
                                <input type="text" class="form-control" id="company-name" name="company-name" required>
                            </div>
                        </div>
                        
                        <input type="hidden" name="service-url" value="<?=get_current_url()?>">
                        <input type="hidden" name="price-calculator-result-msg" value="">
                        <input type="hidden" id="g-recaptcha-response-cacl" name="g-recaptcha-response" />

                        <div class="row">
                            <div class="col-md-9 col-sm-12">
                                <label for="first-name"><?php the_quote_field('form-quote-details') ?>: * </label>
                                <textarea class="form-control form-quote-details" id="quote-details" name="quote-details" rows="8" required></textarea>
                            </div>
                            <div class="price-calculator-result-form-btn-group col-md-9 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 text-lg-left text-center order-lg-1 order-2 mrt-md-25 ">
                                        <a href="#" class="btn btn-recalc" id="btn-recalculate"><?=$btn_recalculate_label[$lang]?></a>
                                    </div>
                                    <div class="col-md-6 text-lg-right text-center order-lg-2 order-1">
                                        <button type="submit" class="btn btn-primary btn-long cs-btn-one btn-gradient-color mrb-md-20 ml-auto">
                                            <?=$btn_send_label[$lang]?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</section>
<script>
    function onloadCallback() {
        grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'homepage'}).then(function (token) {
                //console.log(token);
                document.getElementById('g-recaptcha-response-cacl').value = token;
            });
        });
    }
  </script>