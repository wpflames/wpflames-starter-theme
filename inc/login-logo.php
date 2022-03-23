<?php
/**
 * Login Logo
 * 
 * @package      Underscore
 * @author       Gabor Flamich
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;  

/**
 * Login Logo URL
 *
 */
function ea_login_header_url( $url ) {
    return esc_url( home_url() );
}
add_filter( 'login_headerurl', 'ea_login_header_url' );
add_filter( 'login_headertext', '__return_empty_string' );

/**
 * Login Logo
 *
 */
function ea_login_logo() {

	$logo_path = '/images/logo.jpg';
	if( ! file_exists( get_stylesheet_directory() . $logo_path ) )
		return;

	$logo = get_stylesheet_directory_uri() . $logo_path;
    ?>
    <style type="text/css">
    .login h1 a {
        background-image: url(<?php echo $logo;?>);
        background-size: contain;
        background-repeat: no-repeat;
		background-position: center center;
        display: block;
        overflow: hidden;
        text-indent: -9999em;
        width: 312px;
        height: 100px;
    }
    </style>
    <?php
}
add_action( 'login_head', 'ea_login_logo' );
