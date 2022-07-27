<?php
// Front Page
/************************************/

defined( 'ABSPATH' ) || exit; 

get_header(); ?>


<main class="frontpage">
	<?php cover(); ?>

	<section id="services" class="container">
		<?php get_template_part( 'template-parts/content', 'boxes' ); ?>
	</section>

	<section id="team" class="container">
		<?php get_template_part( 'template-parts/content', 'team' ); ?>
	</section>

</main>

<?php get_footer(); ?>