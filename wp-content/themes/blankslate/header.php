<?php
$lang = pll_current_language();
$menu = wp_get_nav_menu_items('main-menu-' . $lang);
$asset_url = get_template_directory_uri() . '/assets';
//////
if (file_exists(__DIR__ . '/assets/css/style.css'))
    $style_css_version = filemtime(__DIR__ . '/assets/css/style.css');
else
    $style_css_version = 0;
//////
if (file_exists(__DIR__ . '/assets/css/elementor-blocks.css'))
    $elementor_blocks_css_version = filemtime(__DIR__ . '/assets/css/elementor-blocks.css');
else
    $elementor_blocks_css_version = 0;
//////
if (file_exists(__DIR__ . '/assets/css/responsive.css'))
    $responsive_css_version = filemtime(__DIR__ . '/assets/css/responsive.css');
else
    $responsive_css_version = 0;
///
if (file_exists(__DIR__ . '/assets/css/simplyscroll.css'))
    $simply_scroll_css_version = filemtime(__DIR__ . '/assets/css/simplyscroll.css');
else
    $simply_scroll_css_version = 0;

function get_sub_menu($i, $j, $lang)
{
    return wp_get_nav_menu_items("main-menu-sub-$i-col-$j-" . $lang);
}
?>
<?php
if (isset($_GET['google_adword'])) {
    if (!isset($_COOKIE["google_adword"])) {
        // print_r("no google adword tag");
        setcookie("google_adword", "true", time() + (10 * 365 * 24 * 60 * 60));
    } else {
        // print_r($_COOKIE);
    }
}
session_start();

if (isset($_GET['utm_source'])){
    $_SESSION['utm_source'] = $_GET['utm_source'];
}



?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= $asset_url ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/fonts/webexflaticon/flaticon.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/fonts/webexicon/style.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/simplyscroll.css?v=<?= $simply_scroll_css_version ?>">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/animate.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/custom-animation.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/elementor-blocks.css?v=<?= $elementor_blocks_css_version ?>">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/single-case.css">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/style.css?v=<?= $style_css_version ?>">
    <link rel="stylesheet" href="<?= $asset_url ?>/css/responsive.css?v=<?= $responsive_css_version ?>">
    <link rel="stylesheet" href="<?= $asset_url ?>/style.css?v=27">
    <!-- Google Captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById('email-order-form').submit();
        }
    </script>
    <!-- End of Google Captcha -->

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <div class="modal fade" id="get-quote" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include 'partials/get-quote-form.php'; ?>
    </div>

    <?php wp_body_open(); ?>

        <header>
            <div class="header-wrapper">

                <div class="header-top-area bg-gradient-color d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 header-top-left-part" style="display: flex; align-items: center;">
                                <img class="phone-icon" src="<?= $asset_url ?>/images/phone.png" />

                                <a href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                                    <span class="address"><?php the_site_setting_field('primary-phone-number') ?></span>
                                </a>

                                <img class="phone-icon" src="<?= $asset_url ?>/images/phone.png" />

                                <a href="tel:<?php the_site_setting_field('secondary-phone-number') ?>">
                                    <span class="address"><?php the_site_setting_field('secondary-phone-number') ?></span>
                                </a>

                                <img class="phone-icon" src="<?= $asset_url ?>/images/phone.png" />

                                <a href="tel:<?php the_site_setting_field('third-phone-number') ?>">
                                    <span class="address"><?php the_site_setting_field('third-phone-number') ?></span>
                                </a>

                                <img class="phone-icon footer-mail-img" src="<?= $asset_url ?>/images/footer-mail.png" />

                                <a class="address" href="mailto:<?php the_site_setting_field('email') ?>">
                                    <?php the_site_setting_field('email') ?>
                                </a>
                            </div>

                            <div class="col-lg-3 header-top-right-part text-right">
                                <div class="language">
                                    <img class="web-icon" src="<?= $asset_url ?>/images/web.png"></img>
                                    <a class="first-lang-link" href="/">O'zbekcha</a>
                                    <div class="text-border"> | </div>
                                    <a href="/ru/">Русский</a>
                                    <div class="text-border"> | </div>
                                    <a href="https://oqilaweb.com">English</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <nav id="header__navbar" class="navbar navbar-expand-lg header__navbar header__navbar--bg-dark">

                    <div class="container header__navbar-container">

                        <!-- mobile menu icon -->
                        <button id="mobile-menu-icon" class="navbar-toggler header__navbar-toggler mrl-20" type="button">
                            <i class="fas fa-bars"></i>
                        </button>

                        <!-- logo -->
                        <a class="navbar-brand pdt-10 pdb-10" href="<?= get_home_page_url() ?>">
                            <img class="header__logo" src="<?= $asset_url ?>/images/oqila-logo.png">
                            <img class="header__logo-scroll desktop-only" src="<?= $asset_url ?>/images/oqila-logo-scroll.png">
                        </a>

                        <!-- desktop phone number on scroll -->
                        <div class="header__scroll-phone desktop-only mrl-5">
                            <span class="h5 header__scroll-phone-text">
                                <i class="fas fa-phone-alt"></i>
                                <?php the_site_setting_field('primary-phone-number') ?>
                            </span>
                        </div>

                        <!-- mobile phone icon -->
                        <img id="mobile-phone-icon" class="m-call-image mrr-20 mobile-only" src="/wp-content/themes/blankslate/assets/images/m-call.png">

                        <!-- mobile dropdown phone numbers-->
                        <div class="collapse navbar-collapse mega-menu-wrapper " id="navbarPhone">

                            <nav class="nav flex-column text-center mobile-only">

                                <a class="nav-link header__mobile-phone" href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                                    <i class="fas fa-phone-alt"></i>
                                    <?php the_site_setting_field('primary-phone-number') ?>
                                </a>

                                <a class="nav-link header__mobile-phone" href="tel:<?php the_site_setting_field('secondary-phone-number') ?>">
                                    <i class="fas fa-phone-alt"></i>
                                    <?php the_site_setting_field('secondary-phone-number') ?>
                                </a>

                                <a class="nav-link header__mobile-phone" href="tel:<?php the_site_setting_field('third-phone-number') ?>">
                                    <i class="fas fa-phone-alt"></i>
                                    <?php the_site_setting_field('third-phone-number') ?>
                                </a>

                            </nav>
                        </div>

                        <!-- menu -->
                        <div class="collapse navbar-collapse mega-menu-wrapper" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                                <?php

                                $i = 1;
                                foreach ($menu as $item) {
                                    $j = 1;
                                    $submenu = get_sub_menu($i, $j, $lang);

                                    if ($submenu) {
                                        $li_class = 'dropdown has-megamenu';
                                        $a_class = 'dropdown-toggle';
                                        $a_attr = 'data-toggle="dropdown"';
                                    } else {
                                        $li_class = '';
                                        $a_class = '';
                                        $a_attr = '';
                                    }
                                ?>
                                    <li class="nav-item <?= $li_class ?>">

                                        <a class="nav-link <?= $a_class ?> mega-menu__top-link" href="<?= $item->url ?>" <?= $a_attr ?>><?= $item->title ?></a>

                                        <?php if ($submenu) : ?>

                                            <div class="dropdown-menu megamenu" role="menu">

                                                <div class="container">
                                                    <div class="row">

                                                        <?php
                                                        do {
                                                        ?>
                                                            <div class="col-md-3">
                                                                <div class="col-megamenu mrt-15">

                                                                    <span class="mega-menu__sub-title">
                                                                        <?php the_translation_field("main-menu-sub-$i-col-$j-title"); ?>
                                                                    </span>

                                                                    <ul class="list-unstyled">

                                                                        <?php foreach ($submenu as $sub_item) : ?>

                                                                            <li>
                                                                                <a href="<?= $sub_item->url ?>" class="mega-menu__sub-link"><?= $sub_item->title ?>
                                                                                </a>
                                                                            </li>

                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div> <!-- col-megamenu.// -->
                                                            </div>

                                                        <?php
                                                            $j++;
                                                        } while ($j < 4 && ($submenu = get_sub_menu($i, $j, $lang)));
                                                        ?>

                                                        <div class="col-md-3">
                                                            <div class="col-megamenu mrt-15 mrb-20">

                                                                <img src="<?php the_translation_field("main-menu-sub-$i-img"); ?>">

                                                            </div> <!-- col-megamenu.// -->
                                                        </div>

                                                    </div>

                                                    <div class="mega-menu__sub-footer">
                                                        <a href="<?php the_translation_field("main-menu-sub-$i-btn-url"); ?>" class="cs-btn-one btn-gradient-color btn-lg--desktop"><?php the_translation_field("main-menu-sub-$i-btn-label"); ?></a>
                                                    </div>
                                                </div>

                                            </div>

                                        <?php endif ?>

                                    </li>
                                <?php
                                    $i++;
                                }
                                ?>

                            </ul>

                            <nav class="nav flex-column mrt-30 mobile-only">
                                <a class="nav-link" href="/">O'zbekcha</a>
                                <a class="nav-link" href="/ru/">Русский</a>
                                <a class="nav-link" href="https://oqilaweb.com">English</a>
                            </nav>
                            <?php if (pll_current_language() != 'en') : ?>
                                <a class="cs-btn-one btn-gradient-color mrl-10 desktop-only navbar__btn" href="#" data-toggle="modal" data-target="#get-quote">
                                    <?php the_translation_field('order-now') ?>
                                </a><?php endif ?>

                        </div>

                    </div>

                </nav><!-- navbar end -->

            </div><!-- header-wrapper -->

        </header>
