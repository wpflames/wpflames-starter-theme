<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscore
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; 
?>

	<footer id="colophon" class="site-footer">
		<div class="wrap">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscore' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'underscore' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscore' ), 'underscore', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
