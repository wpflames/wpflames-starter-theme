<?php 
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<div class="wrap">
    <h2 class="frontpage-title">Szolgáltatások</h2>
    <div class="boxes grid grid-3">

    <?php $args = array(
            'post_type' => 'szolgaltatasok'
        );
        
        $the_query = new WP_Query( $args ); 

        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

            box(); 

        endwhile; endif; 
    
    wp_reset_postdata(); ?>

        
    </div>
</div>