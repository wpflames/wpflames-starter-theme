<?php
defined( 'ABSPATH' ) || exit; ?>

<article class="archive-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="archive-card-img-wrapper">
		<a href="<?php the_permalink(); ?>">
			<?php add_featured_image(); ?>
		</a>
	</div>
	<div class="archive-card-text">
		<h4 class="archive-card-title">
            <a class="archive-card-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h4>
		<?php the_excerpt(); ?>
	</div>
</article>