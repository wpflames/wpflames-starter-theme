<?php get_header(); ?>

<div class="site-inner">

    <div class="content-sidebar-wrap">

        <main class="content">

        <?php 

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;


        if(empty( $terms )){
            $args = array(
                'post_type' => $post_type,
                'posts_per_page' => 10,
                'paged'          => $paged,
            );
        } else{
            $args = array(
                'post_type' => $post_type,
                'posts_per_page' => 10,
                'paged'          => $paged,
                'tax_query' => array(
                        array(
                            'taxonomy' => 'kategoria',
                            'field' => 'slug',
                            'terms' => $terms
                        )
                    )
            );
        }


		$the_query = new WP_Query( $args ); 

        if ($the_query-> have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
                </header>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post();

					get_template_part( 'template-parts/content', 'archive' );

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

<?php get_footer(); ?>