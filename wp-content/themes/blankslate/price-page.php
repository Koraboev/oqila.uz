<?php
/**
 * Template Name: PRICE PAGE
 */

$lang = pll_current_language();
$batafsil = $lang == "uz" ? "Batafsil" : (($lang == "ru") ? "Подробнее" : "More");
function price_ot($narx) {
    return pll_current_language() == 'ru' ? sprintf('от %s', $narx) : sprintf('%s dan', $narx);
}
function price_do($narx) {
    return pll_current_language() == 'ru' ? sprintf('до %s', $narx) : sprintf('%s gacha', $narx);
}
?>

<?php get_header();

?>

<?php include 'partials/mega-banner.php'; ?>

<?php include 'partials/block-image-text.php'; ?>

<section id="prices">
<div class="container-fluid"><div class="row justify-content-center mb-5">
        <div class="card-group">
            <div class="card"><div class="intersect"></div>
                
                <div class="card-body">
                    <h5 class="card-title"><?= get_field('seo-title')?></h5>
                    <h5 class="card-price">
                        <?=price_ot(get_field('seo_narx_ot'))?>
                    </h5>
                    <p class="card-text"><?= get_field('seo-desc')?></p>
                    <div id="sections_button">
                        <a href="<?=get_field('seo-url')?>">
                            <button>
                                <?= $batafsil ?>
                            </button>
                        </a>
                    </div>
                </div>
               </div>
            <div class="card"><div class="intersect"></div>

                <div class="card-body">
                    <h5 class="card-title"><?= get_field('web-title')?></h5>
                    <h5 class="card-price">
                        <?=price_ot(get_field('web_narx_ot'))?>
                    </h5>
                    <p class="card-text"><?= get_field('web-desc')?></p>
                    <div id="sections_button">
                        <a href="<?=get_field('web-url')?>">
                            <button>
                                <?= $batafsil ?>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
            <div class="card"><div class="intersect"></div>

                <div class="card-body">
                    <h5 class="card-title"><?= get_field('logo-title')?></h5>
                    <h5 class="card-price">
                        <?=price_ot(get_field('logo_narx_ot'))?>
                    </h5>
                    <p class="card-text"><?= get_field('logo-desc')?></p>
                    <div id="sections_button">
                        <a href="<?=get_field('logo-url')?>">
                            <button>
                                <?= $batafsil ?>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-group">
            <div class="card"><div class="intersect"></div>

                <div class="card-body">
                    <h5 class="card-title"><?= get_field('ecommerce-title')?></h5>
                    <h5 class="card-price">
                        <?=price_ot(get_field('com_narx_ot'))?>
                    </h5>
                    <p class="card-text"><?= get_field('ecommerce-desc')?></p>
                    <div id="sections_button">
                        <a href="<?=get_field('ecommerce-url')?>">
                            <button>
                                <?= $batafsil ?>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
            <div class="card"><div class="intersect"></div>

                <div class="card-body">
                    <h5 class="card-title"><?= get_field('adword-title')?></h5>
                    <h5 class="card-price">
                        <?=price_ot(get_field('adword_narx_ot'))?>
                    </h5>
                    <p class="card-text"><?= get_field('adword-desc')?></p>
                    <div id="sections_button">
                        <a href="<?=get_field('adword-url')?>">
                            <button>
                                <?= $batafsil ?>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
            <div class="card"><div class="intersect"></div>

                <div class="card-body">
                    <h5 class="card-title"><?= get_field('naming-title')?></h5>
                    <h5 class="card-price">
                        <?=price_ot(get_field('naming_narx_ot'))?>
                    </h5>
                    <p class="card-text"><?= get_field('naming-desc')?></p>
                    <div id="sections_button">
                        <a href="<?=get_field('naming-url')?>">
                            <button>
                                <?= $batafsil ?>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
</div></div>
</section>


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
