<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

// =============================================================
// Enqueue Scripts
// =============================================================
function enqueue_exit_popup_scripts() {
    wp_enqueue_script( 'cookie-js', THEME . '/components/exit-popup/assets/js/CookieService.js', array(), '1.0.0', true );
    wp_enqueue_script( 'exitpopup-js', THEME . '/components/exit-popup/assets/js/popup.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_exit_popup_scripts' );

function display_popup_content(){
    include('inc/exit-content.php');
}
add_action( 'genesis_after', 'display_popup_content');