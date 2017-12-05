<?php
/**
 * Preachers Sermon List
 * @package WordPress
 * @subpackage thebranchtheme
 * @since The Branch Theme 1.0
 */

get_header(); ?>

<?php
	
$taxonomy_name = 'preachers';

$term_slug = get_query_var('term');

$term = get_term_by('slug', $term_slug, $taxonomy_name);
	
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2><?= $term->name ?></h2>
			<?php 		
				
				// Display posts.
				$args = array(
					'post_type' => 'sermons',
					'tax_query' => array(
						array(
							'taxonomy' => $taxonomy_name,
							'terms' => $term->term_id,
						),
					),
				);
				
				$query = new WP_Query($args);
				
				if ($query->have_posts())
				{
					while ( $query->have_posts() ) 
					{
						$query->the_post();
						
						echo '<a href="' . esc_url(get_permalink()) . '"><h2>' . get_the_title() . '</h2></a>';
					}
					
					wp_reset_postdata();
				}
					
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>