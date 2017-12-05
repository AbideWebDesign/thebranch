<?php
/**
 * Template Name: All Series Landing
 * @package WordPress
 * @subpackage thebranchtheme
 * @since The Branch Theme 1.0
 */

get_header(); ?>

<?php
	$taxonomy_name = 'series';
	
	$series = get_terms( array(
	    'taxonomy' => $taxonomy_name,
	    'hide_empty' => false,
	    'parent' => 0,
	) );
		
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Series</h2>
			<ul>
			<?php 		
	
				foreach($series as $current_series):
					// ACF format: taxonomy_name_ID
					$series_img = get_field('artwork', $taxonomy_name . '_' . $current_series->term_id);	
			?> 
					
					<div class="col-sm-4">
						<div><a href="<?= esc_url(get_term_link($current_series, $taxonomy_name)) ?>"><img src="<?= $series_img; ?>" /></a></div>
						<div><a href="<?= esc_url(get_term_link($current_series, $taxonomy_name)) ?>"><?= $current_series->name; ?></a></div>
						<div><?= $current_series->description; ?></div>
					</div>
			
			<?php
				
				endforeach;
		
			?>
	
		</div>
	</div>
</div>

<?php get_footer(); ?>