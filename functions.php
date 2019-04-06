<?php


/**
 * The Amendment functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Benjamin
 */

if (version_compare($GLOBALS['wp_version'], '4.6', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

// Define some constants.
define('BENJAMIN_FULL_WIDTH', 'usa-width-one-whole');
define('BENJAMIN_FULL_WIDTH_MEDIUM_UP', 'usa-width-full-medium-up');
define('BENJAMIN_FULL_WIDTH_LARGE_UP', 'usa-width-full-large-up');

// wide sidebar.
define('BENJAMIN_TWO_THIRDS', 'usa-width-two-thirds');
define('BENJAMIN_ONE_THIRD', 'usa-width-one-third');

// narrow sidebar.
define('BENJAMIN_ONE_FOURTH', 'usa-width-one-fourth');
define('BENJAMIN_THREE_FOURTHS', 'usa-width-three-fourths');
define('BENJAMIN_ONE_HALF', 'usa-width-one-half');


// misc.
define('BENJAMIN_DEFAULT_TEMPLATE', 'default');
define('BENJAMIN_FRONTEND_ASSETS_DIR', get_template_directory_uri() . '/assets/frontend/');

if(!defined('BENJAMIN_POST_FORMATS')) {
    define('BENJAMIN_POST_FORMATS', json_encode(
        array('audio', 'image', 'gallery', 'link', 'quote', 'status', 'video')
    ));
}

require_once get_template_directory() . '/post-types/news-updates.php';
require_once get_template_directory() . '/post-types/forms-documents.php';
require_once get_template_directory() . '/inc/_inc.php';

// We don't need posts currently
function remove_menus() {
	remove_menu_page( 'edit.php' );                   //Posts
}
add_action( 'admin_menu', 'remove_menus' );

// Don't need to have primary taxonomy in Yoast
add_filter( 'wpseo_primary_term_taxonomies', '__return_empty_array' );

function homepage_content_init() {
	register_sidebar( array(
		'name'          => 'Home Main',
		'id'            => 'home_main',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="margin-top: 0">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'homepage_content_init' );

function homepage_sidebar_init() {
	register_sidebar( array(
        'name'          => 'Home Sidebar',
        'id'            => 'home_sidebar',
        'before_widget' => '<div class="oec-widgets">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'homepage_sidebar_init' );

?>