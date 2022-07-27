<?php if ( !is_front_page()): ?>
	<div class="breadcrumbs">
		<div class="breadcrumbs-wrap">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p>','</p>' );
			}
			?>
		</div>
	</div>
<?php endif; ?>