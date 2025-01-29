<?php 
/*
Plugin Name: Keyword research
Plugin URI: http://oqila.uz
Description: The WordPress Google keyword research plugin. 
Version: 1.0
Author: Oqila 
Author URI: http://www.oqila.uz
*/

function wprbkey_menu() {

	add_menu_page(
		'Google Keyword Plugin',
		'Keywords idea',
		'manage_options',
		'wprb-keyword',
		'wprb_keyword_options_page',
		'dashicons-nametag'
	);

	add_action( 'admin_print_styles', 'rb_key_admin_styles' );

}

// Load styles
function rb_key_admin_styles() {
	wp_enqueue_style( 'rbkeyword_style', plugins_url(). '/rb-keyword-research/css/rbkeyword_style.css' );
	wp_enqueue_style ( 'wp-jquery-ui-dialog' );
}
// Load JS
function wprb_keyword_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script ( 'jquery-ui-dialog' );

	wp_enqueue_script( 'jquery.gcomplete', plugins_url() . '/rb-keyword-research/js/jquery.gcomplete.0.1.2.js', array(), null, false );
	wp_enqueue_script( 'rbkeyword_main', plugins_url() . '/rb-keyword-research/js/rbkeyword_main.js', array(), null, false );
}

add_action( 'admin_menu', 'wprbkey_menu' );
add_action( 'admin_init', 'wprb_keyword_scripts' );

function wprb_keyword_options_page() {

		if( !current_user_can( 'manage_options' ) ) {

			wp_die( 'You do not have sufficient permissions to access this page.' );

		}

		require('wprb_keyword_main.php');
}

function front_keyword_form()
{
    wp_enqueue_script( 'jquery.gcomplete', plugins_url() . '/rb-keyword-research/js/jquery.gcomplete.0.1.2.js', array(), null, false );
    wp_enqueue_script( 'front.main', plugins_url() . '/rb-keyword-research/js/front.main.js', array(), null, false );

    return include('parts/front.php');
}

add_shortcode('google_keywords_idea', 'front_keyword_form');