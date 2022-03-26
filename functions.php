<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

// =============================================================
// Require Functions
// =============================================================
require get_theme_file_path('inc/underscore-functions.php');
require get_theme_file_path('inc/post-types.php');
require get_theme_file_path('inc/remove-junk.php');
require get_theme_file_path('inc/async.php');
require get_theme_file_path('inc/wpml.php');
require get_theme_file_path('inc/login-logo.php');
require get_theme_file_path('inc/disable-comments.php');

// =============================================================
// Define constants
// =============================================================
define('THEME', get_stylesheet_directory_uri());

// =============================================================
// Theme URL
// =============================================================
function theme_url(){
    // echo site_url('/wp-content/themes/YOURTHEME/');
    echo get_stylesheet_directory_uri();
}

// =============================================================
// Enqueue Admin CSS
// =============================================================
function admin_css() {
    wp_enqueue_style( 'admin_css', THEME . '/assets/css/wpadmin.css' );
}
add_action('admin_print_styles', 'admin_css' );

// =============================================================
// Enqueue Scripts
// =============================================================
function add_custom_scripts() {
    // CSS
    wp_enqueue_style( 'custom-css', THEME . '/assets/build/style.css' );

    // JavaScript
    wp_enqueue_script( 'scripts-js', THEME . '/assets/build/script.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'hambi-js', THEME . '/assets/js/hamburger.js', array(), '1.0.0', true );

    // Google Font
    wp_enqueue_style( 'google-font-poppins', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), 1.0);
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );

// =============================================================
// Add Page Slug to Body Class
// =============================================================
function add_slug_to_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_to_body_class' );  

// =============================================================
// Featured Image
// =============================================================
function add_featured_image(){
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'full', array('class' => 'featured') );
	}
}

// =============================================================
// Disable Block Editor for Widgets
// =============================================================
add_filter( 'use_widgets_block_editor', '__return_false' );

// =============================================================
// Remove all Notices and Warnings from Admin
// =============================================================
function wpflames_hide_notices_wp() { 
    echo '<style> .notice { display: none;} </style>';
}
add_action('admin_head', 'wpflames_hide_notices_wp'); 