<?php 
defined( 'ABSPATH' ) || exit; ?>

<div class="wrap">
    <h2 class="frontpage-title">Szolgáltatások</h2>
    <div class="boxes grid grid-3">

    <?php $args = array(
            'post_type' => 'szolgaltatasok'
        );
        
        $the_query = new WP_Query( $args ); 

        $i = 0;
        
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

                $i++; ?>

                <div id="box<?php echo $i; ?>" class="box"> 
                    <h3><?php the_title(); ?></h3> 
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">Tovább</a>
                </div>

           <?php endwhile; endif; 
        
    wp_reset_postdata(); ?>

        
    </div>
</div>