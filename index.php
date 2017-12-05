<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage startertheme
 * @since Starter Theme 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<?php 
		
		if ( have_posts() ) : 
			// Start the loop.
			while ( have_posts() ) : the_post();
				the_content(); 
				// End the loop.
			endwhile;
		endif;
			
		?>
		</div>
	</div>
</div>

<?php get_footer(); ?>