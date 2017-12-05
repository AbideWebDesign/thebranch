<?php

$post_type = 'sermons';
$taxonomy_name = 'series';

$args = array(
	'orderby' => 'id',
	'order' => 'DESC',
	'number' => 3,	
);

$recent_series = get_terms($taxonomy_name, $args);

echo '<h2>Recent Series</h2>';
echo '<ul>';

foreach($recent_series as $series)
{
	echo '<li><a href="' . esc_url(get_term_link( $series, $taxonomy_name )) . '"><h3>' . $series->name . '</h3></a></li>';
}

echo '</ul>';
?>