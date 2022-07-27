<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

// =============================================================
// Back-End Functions
// =============================================================
require get_theme_file_path('inc/underscore-functions.php');
require get_theme_file_path('inc/post-types.php');
require get_theme_file_path('inc/remove-junk.php');
require get_theme_file_path('inc/async.php');
require get_theme_file_path('inc/wpml.php');
require get_theme_file_path('inc/login-logo.php');
require get_theme_file_path('inc/disable-comments.php');

// =============================================================
// Front-End Functions
// =============================================================
function cover(){ require get_theme_file_path('components/cover/cover.php'); }
function breadcrumbs(){ require get_theme_file_path('components/breadcrumbs/breadcrumbs.php'); }
function card(){ require get_theme_file_path('components/card/card.php'); }
function box(){ require get_theme_file_path('components/box/box.php'); }

// =============================================================
// Define constants
// =============================================================
define('THEME', get_stylesheet_directory_uri());

// =============================================================
// Theme URL
// =============================================================
function theme_url(){
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
// Add Image Size
// =============================================================
add_image_size( 'archive', 300, 300, array( 'left', 'top' ) ); // Hard crop left top

// =============================================================
// Featured Image
// =============================================================
function add_featured_image(){
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'medium', array('class' => 'archive-card-img') );
	} else{
        echo '<img src="'.get_stylesheet_directory_uri().'/images/placeholder.jpg" alt="placeholder">';
    }
}

// =============================================================
// Featured Image
// =============================================================
function featured_image(){
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'full', array('class' => 'archive-card-img') );
	} else{
        echo '<img src="'.get_stylesheet_directory_uri().'/images/placeholder.jpg" alt="placeholder">';
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

// =========================================================================
// Button Shortcode 
// =========================================================================
function btn_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'class'  =>  '',
        'href'  =>  '#',
        'text' => ''
    ), $atts );
 
    return '<a class="btn-cta ' . esc_attr($a['class']) . '" href="' . esc_attr($a['href']) . '">' . esc_attr($a['text']) . '</a>';
}
add_shortcode( 'button', 'btn_shortcode' );


// =========================================================================
// Button Back 
// =========================================================================
function btn_back_home() {
    ob_start();
    echo '<a class="btn-cta back" href="'.site_url().'">
            <span>
                <svg id="arrow-left" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg>
            </span> Vissza a főoldalra
        </a>';
    return ob_get_clean();
}
add_shortcode('backhome', 'btn_back_home');

// =========================================================================
// Custom Functions
// =========================================================================
function cta(){
    require get_theme_file_path('components/cta/cta.php');
}

// =========================================================================
// Change the excerpt more filter
// =========================================================================
function custom_excerpt_more( $more ) {
    return '... <div class="more-link-wrap d-none"> <a class="btn-cta read-more" href="'. get_permalink( get_the_ID() ) . '"><span class="text">Tovább</span> <span class="icon"><svg id="arrow-right-long" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z"/></svg></span></a></div>';
     }
 add_filter('excerpt_more', 'custom_excerpt_more');

// =========================================================================
// Excerpt length
// =========================================================================
function modify_excerpt_length( $length ) {
    return 18; 
}
add_filter( 'excerpt_length', 'modify_excerpt_length' );

// =========================================================================
// ADD CLASS TO EXCERPT
// =========================================================================
function add_class_to_excerpt ($post_excerpt) { 
    $post_excerpt = '<p class="box-text">' . $post_excerpt . '</p>';
    return $post_excerpt;
}  
add_filter ('get_the_excerpt','add_class_to_excerpt');