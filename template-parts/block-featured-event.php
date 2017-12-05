<?php

$args = array(
	'post_type' => 'tribe_events',
	'posts_per_page' => 1,
	'tax_query' => array(
		array(
			'taxonomy' => 'tribe_events_cat',
			'field' => 'slug',
			'terms' => 'featured',
		),
	),
);

$query = new WP_Query($args);

if ($query->have_posts())
{
	// Upcoming featured event exists
	while ($query->have_posts())
	{
		$query->the_post();
		
		the_title();
	}
	
	wp_reset_query();
}
	
?>