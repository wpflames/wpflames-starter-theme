<div class="card"> 
    <div class="card-img">
        <?php featured_image(); ?>
    </div>
    <h3 class="card-title"><?php the_title(); ?></h3> 
    <p class="card-text"><?php the_excerpt(); ?></p>
    <a class="card-link" href="<?php the_permalink(); ?>">Tovább</a>
</div>