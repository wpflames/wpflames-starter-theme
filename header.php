<?php

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

	<header class="site-header">
		<div class="site-header-wrap">
			<div class="site-header-branding">
					<div class="site-header-branding-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<div class="site-header-logo">
								<img class="site-header-logo-img" src="<?php theme_url(); ?>/images/logo.svg" alt="logo">
									<svg class="site-header-logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 500 80" style="enable-background:new 0 0 500 80;" xml:space="preserve">
									<style type="text/css">
										.st0{fill:#FFFFFF;}
									</style>
									<path class="st0" d="M458.1,0H0v80h458.1v-0.4c23.1,0,41.9-17.8,41.9-39.8C500,17.8,481.2,0,458.1,0z"/>
									</svg>
							</div>
						</a>
					</div>
				
			</div>

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
				
			</nav>
		</div>
	</header>

<?php if ( !is_front_page()): ?>
	<div class="breadcrumbs">
		<div class="breadcrumbs-wrap">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p>','</p>' );
			}
			?>
		</div>
	</div>
<?php endif; ?>