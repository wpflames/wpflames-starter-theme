<?php
/**
 * Template for all pages
 */

defined( 'ABSPATH' ) || exit; 

get_header(); ?>

<div class="site-inner">

	<div class="content-sidebar-wrap">

	<main id="primary" class="content">

			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; ?>

	</main>
	
	<?php get_sidebar(); ?>

	</div>
	
</div>

<?php get_footer(); ?>