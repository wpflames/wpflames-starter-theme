<?php

// Front Page
/************************************/
defined( 'ABSPATH' ) || exit; 

get_header(); ?>

<main class="frontpage">
	<?php get_template_part( 'template-parts/content', 'cover' ); ?>

	<section id="services" class="container">
		<?php get_template_part( 'template-parts/content', 'boxes' ); ?>
	</section>

	<section id="team" class="container">
		<?php get_template_part( 'template-parts/content', 'team' ); ?>
	</section>

	<section id="section-4" class="container-fluid">
		
	</section> 

	<section id="section-5" class="container">
		
	</section>

	<section id="section-6" class="container">
		
	</section>

	<section id="section-7" class="container">
		
	</section>
</main>

<?php get_footer(); ?>