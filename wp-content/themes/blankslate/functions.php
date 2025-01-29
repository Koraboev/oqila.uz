<?php

// disable auto big image resize
add_filter( 'big_image_size_threshold', '__return_false' );

add_filter('wp_sitemaps_enabled', '__return_false');

/* WP has stupid feature. It auto redirects. Let's disable it. */
remove_action('template_redirect', 'redirect_canonical');

function get_home_page_url()
{
    if(pll_current_language() == pll_default_language())
        return '/';
    else
        return '/'.pll_current_language().'/';
}

function get_blog_page_url()
{
     if(pll_current_language() == 'uz')
        return get_permalink(2457);
    else
        return get_permalink(2459);
}

function get_qoute_url()
{
    if(pll_current_language() == 'uz')
        return '/get-qoute-uz';
    else
        return '/'.pll_current_language().'/get-qoute-'.pll_current_language();
}

function the_quote_field($slug, $no_echo = false)
{
    $res = pll_current_language() == 'uz' ? get_field($slug, 1720) : get_field($slug, 1734);

    if($no_echo)
        return $res;
    else
        echo $res;
}

function the_site_setting_field($slug, $no_echo = false)
{
    $res = get_field($slug, 1390);
    
    if($no_echo)
        return $res;
    else
        echo $res;
}

function the_translation_field($slug)
{
    return pll_current_language() == 'uz' ? the_field($slug, 1388) : the_field($slug, 1389);
}

// Disable WordPress image compression
add_filter( 'jpeg_quality', function( $arg ) {
    return 100;
});

add_action( 'init', 'init_referrer' );
function init_referrer()
{
    if(empty($_SESSION['referrer_url']) && !empty($_SERVER['HTTP_REFERER']))
    {
        if(!session_id())
            session_start();

        $_SESSION['referrer_url'] = $_SERVER['HTTP_REFERER'];
    }
}

function get_current_url()
{
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function get_referrer_url()
{
    if(!session_id())
        session_start();

    return empty($_SESSION['referrer_url']) ? null : $_SESSION['referrer_url'];
}

add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() 
{
    load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );

    add_theme_support( 'menus' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'post-thumbnails' );

    /**
     * Sizes are given a little large than required, so that stupid WP 
     * optimization is not worked if required size is uploaded.
     */
    //add_image_size('main-page-case', 720); // required: 703px
    //add_image_size('service-page-case', 466);

    //add_image_size('long-form-seo-content', 820); // required: 795px
    add_image_size('customer-review', 150, 150); // required: 100px
    // add_image_size('main-page-main-review', 730); // required: 630px

    //add_image_size('main-page-services', 470); // required: 455px

    //add_image_size('main-page-statistics', 800); // required: 782px
}

function get_web_discount_deadline()
{
    $format = 'Y.m.d';
    $deadline = the_site_setting_field('web-discount-deadline', true);

    $d = DateTime::createFromFormat($format, $deadline);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    if($d && $d->format($format) === $deadline)
        return $deadline;
    else
        return 0;
}
function is_thank_you_page(){
    if (get_the_ID() == 1737 OR get_the_ID() == 1739) {
       return true;
    }
    else{
        return false;
    }
}

define('SITE_KEY', '6LdhwK8dAAAAAJXovlmnn6ehTafZ0XMoTUDQBnD6');
define('SECRET_KEY', '6LdhwK8dAAAAAMKakZ-OGgNeWC7aU-OQ81b2aqt-');


function mlink_shortcode( $atts = [], $content = null, $tag = '' ) {
    // normalize attribute keys, lowercase
    $atts = array_change_key_case( (array) $atts, CASE_LOWER );

    // override default attributes with user attributes
    $wporg_atts = shortcode_atts(
        array(
            'title' => 'Oqila.uz',
            'link' => 'https://oqila.uz',
        ), $atts, $tag
    );

    // start box
    ob_start(); ?>
    <div class="mlink-box">
        <hr>
        <img src="<?= get_template_directory_uri() ?>/assets/images/mlink.png"/>
        <?php if (!is_null($content)) { ?>
            <?= apply_filters('the_content', $content); ?>
        <?php } ?>
        <h4><a href="<?=$wporg_atts['link']?>"><?= esc_html($wporg_atts['title']) ?></a></h4>
        <hr>
    </div>
<?php
    // return output
    return ob_get_clean();
}

/**
 * Central location to create all shortcodes.
 */
function shortcodes_init() {
    add_shortcode( 'mlink', 'mlink_shortcode' );
}

add_action( 'init', 'shortcodes_init' );

/**
 * Prints the hreflang tag for the English version (region independent) of the website and the English version
 * localized for the United Kingdom.
 */
function apply_hreflang_tag() {

    echo '<link rel="alternate" href="' . esc_url( 'https://oqilaweb.com' ) . '" hreflang="en" />';

}

//Hook used to print data in the head tag of the front-end
add_action( 'wp_head', 'apply_hreflang_tag' );