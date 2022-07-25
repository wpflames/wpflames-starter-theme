<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

// Team
function custom_post_type_team() {
    $post_type_slug = 'munkatarsaink';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => $post_type_slug),
        'labels' => array(
             'name' => 'Munkatársaink',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name,
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}
add_action('init', 'custom_post_type_team');

// Services
function custom_post_type_services() {
    
    $post_type_slug = 'szolgaltatasok';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'labels' => array(
             'name' => 'Szolgáltatások',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name,
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}
add_action('init', 'custom_post_type_services');

// Aktualitasok
function custom_post_type_actual() {
    
    $post_type_slug = 'aktualitasok';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'labels' => array(
             'name' => 'Aktualitások',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name,
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}
add_action('init', 'custom_post_type_actual');

// Tajekoztatok
function custom_post_type_tajekoztatok() {
    
    $post_type_slug = 'tajekoztatok';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'labels' => array(
             'name' => 'Tájékoztatók',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name,
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}
add_action('init', 'custom_post_type_tajekoztatok');

// =========================================================================
// CUSTOM POST TYPE TAXONOMY
// =========================================================================
      
function create_tajekoztato_taxonomy() {
    register_taxonomy(
        'kategoria',
        'tajekoztatok',
        array(
            'label' => __( 'Kategória' ),
            'rewrite' => array( 'slug' => 'cat-type' ),
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest' => true
        )
    );
}
add_action( 'init', 'create_tajekoztato_taxonomy' );