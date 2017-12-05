<?php

$post_type = 'sermons';

$args = array(
	'post_type' => $post_type,
	'number_posts' => 10,
);

$query = new WP_Query($args);

if ($query->have_posts())
{
	echo '<h2>Lastest Sermons</h2>';
	echo '<ul>';
	
	while ($query->have_posts())
	{
		$query->the_post();
		
		echo '<li><a href="' . esc_url(get_permalink()) . '"><h3>' . get_the_title() . '</h3></a></li>';
		
	}
	
	echo '</ul>';
}
	
?>