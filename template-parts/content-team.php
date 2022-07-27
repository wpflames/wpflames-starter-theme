<?php 
defined( 'ABSPATH' ) || exit; ?>

<div class="wrap">
    <h2 class="frontpage-title">Munkatársaink</h2>
    <div class="cards grid grid-3">

    <?php $args = array(
            'post_type' => 'munkatarsaink'
        );
        
        $the_query = new WP_Query( $args ); 
        
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

                card();
        
            endwhile; endif; 
        
    wp_reset_postdata(); ?>
        
    </div>
</div>