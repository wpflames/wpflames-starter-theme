<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

// Events
function custom_post_type_event() {
    $post_type_slug = 'event';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => $post_type_slug.'s'),
        'labels' => array(
             'name' => $post_type_name.'s',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name.'s',
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}
add_action('init', 'custom_post_type_event');

// Programs
function custom_post_type_program() {
    
    $post_type_slug = 'program';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => $post_type_slug.'s'),
        'labels' => array(
             'name' => $post_type_name.'s',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name.'s',
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-awards'
    ));
}
add_action('init', 'custom_post_type_program');

// Professors
function custom_post_type_professor() {
    
    $post_type_slug = 'professor';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'labels' => array(
             'name' => $post_type_name.'s',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name.'s',
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}
add_action('init', 'custom_post_type_professor');