<?php defined( 'ABSPATH' ) || exit; 

get_header();

get_template_part( 'template-parts/home/content', 'cover' ); ?>

<main id="primary" class="site-main">
	<div class="wrap">
		<?php while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/home/content', 'sections' );
		endwhile; ?>
	</div>
</main>

<?php get_footer();