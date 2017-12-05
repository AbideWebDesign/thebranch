<?php
/**
 * Template Name: Scriptures Landing
 * @package WordPress
 * @subpackage thebranchtheme
 * @since The Branch Theme 1.0
 */

get_header(); ?>

<?php
	$taxonomy_name = 'scripture';
	
	$terms = get_terms( array(
	    'taxonomy' => $taxonomy_name,
	    'hide_empty' => false,
	    'parent' => 0,
	) );
		
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Scriptures</h2>
<?php 		
	
			foreach($terms as $term)
			{ 
				
				echo '<a href="' . esc_url(get_term_link($term, $taxonomy_name)) . '">' . $term->name . '</a>';
	
			}
		
?>
	
		</div>
	</div>
</div>

<?php get_footer(); ?>