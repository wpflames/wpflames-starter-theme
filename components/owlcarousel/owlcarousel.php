<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
);
   
$the_query = new WP_Query( $args ); ?>

<div class="carousel owl-carousel owl-theme">
    
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
    <div class="card">
        <a class="owl-link" href="<?php the_permalink(); ?>">
            <div class="card-cover" style="background-image: url('<?php thumbnail_cover(); ?>'); "></div>
            <div class="caption">
                <h4><?php the_title(); ?></h4>
            </div>
        </a>
    </div>
    
    <?php endwhile; endif; ?>
    
    <?php wp_reset_postdata(); ?>
</div>