<?php
// =============================================================
// Enqueue Scripts for Owl Carousel
// =============================================================
function owl_carousel_scripts() {
    // Home
    if(is_home() || is_front_page()) {

        // css
        wp_enqueue_style( 'owl-css', THEME . '/components/owlcarousel/assets/css/owl.carousel.min.css' );
        wp_enqueue_style( 'owl-theme-css', THEME . '/components/owlcarousel/assets/css/owl.theme.default.min.css' );

        // js 
        // wp_enqueue_script( 'jquery-js', THEME . '/components/jquery/jquery.min.js'); 
        wp_enqueue_script( 'owl-js', THEME . '/components/owlcarousel/assets/js/owl.carousel.min.js' , array(), '1.0.0', true );
        wp_enqueue_script( 'owl-init', THEME . '/components/owlcarousel/assets/js/owl.carousel.init.js', array(), '1.0.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'owl_carousel_scripts' );