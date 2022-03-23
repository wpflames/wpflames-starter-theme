<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

// =============================================================
// REMOVE JUNK FROM WORDPRESS HEAD SECTION
// =============================================================

// Remove wordpress version
remove_action('wp_head', 'wp_generator'); 

// Remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Remove other junk scripts
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'start_post_rel_link', 10, 0 ); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0 ); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0 ); // remove relational links for the posts adjacent to the current post.
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // remove the next and previous post links
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink of the current page
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'index_rel_link'); // remove link to index page