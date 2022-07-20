<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscore
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'underscore' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="wrap">
			<div class="site-branding">
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<div class="site-logo-wrapper">
								<img class="site-logo" src="<?php theme_url(); ?>/images/logo.svg" alt="logo">
								<span class="site-logo-circle"></span>
								<span class="site-logo-bg"></span>
							</div>
						</a>
					</h1>
				<?php else : ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<div class="site-logo-wrapper">
								<img class="site-logo" src="<?php theme_url(); ?>/images/logo.svg" alt="logo">
								<span class="site-logo-circle"></span>
								<span class="site-logo-bg"></span>
							</div>
						</a>
					</p>
				<?php endif;
				
				$underscore_description = get_bloginfo( 'description', 'display' );
				if ( $underscore_description || is_customize_preview() ) : ?>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<div id="toggle" onclick="toggle()" aria-controls="primary-menu" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<?php
				wp_nav_menu(
					array( 
						'theme_location' => 'menu-1',
						'menu_id'        => 'menu',
					)
				);
				?>
				
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

<div id="breadcrumbs" class="wrap">
		<?php
			if ( !is_front_page() && function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p>','</p>' );
		}
		?>
</div>