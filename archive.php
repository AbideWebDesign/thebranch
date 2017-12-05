<?php
/**
 * Archive
 * @package WordPress
 * @subpackage startertheme
 * @since Starter Theme 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">test
<!--t
			<?php 
			if ( have_posts() ) : 
				// Start the Loop.
				while ( have_posts() ) : the_post(); 
					get_template_part( 'template-parts/content', 'loop' );
				endwhile;
			endif; 
			?>
-->
		</div>
	</div>
</div>

<?php get_footer(); ?>