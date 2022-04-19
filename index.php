<?php
/**
 * The main template file
 */

defined( 'ABSPATH' ) || exit; 

get_header(); ?>

<div class="site-inner">

    <div class="content-sidebar-wrap">

		<main id="primary" class="content">
			<header>
				<h1 class="entry-title">Blog</h1>
			</header>


			<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 10,
				'paged'          => $paged
			);

			$the_query = new WP_Query( $args ); 

			if ($the_query-> have_posts() ) : while ( $the_query-> have_posts() ) :	$the_query->the_post();

					get_template_part( 'template-parts/content', 'archive-post' );

				endwhile;

				the_posts_pagination( array(
					'mid_size'  => 2,
				) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main>

		<?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer();