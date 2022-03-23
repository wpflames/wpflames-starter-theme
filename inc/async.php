<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

// =========================================================================
// ASYNC LOAD
// =========================================================================
function my_async_scripts($url){
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='true"; 
    }
add_filter( 'clean_url', 'my_async_scripts', 11, 1 );