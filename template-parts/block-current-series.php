<?php
	
$taxonomy_name = 'series';

$args = array(
	'orderby' => 'id',
	'order' => 'DESC',
	'number' => 1,
);

// Set variables
$current_series = get_terms($taxonomy_name, $args);

$series_name = $current_series[0]->name;
$series_desc = $current_series[0]->description;

// ACF format: taxonomy_name_ID
$series_img = get_field('artwork', $taxonomy_name . '_' . $current_series[0]->term_id);	

?>

<h2>Latest Sermon Series</h2>

<?php

	echo $series_name;
	echo $series_desc;
	echo $series_img;

?>