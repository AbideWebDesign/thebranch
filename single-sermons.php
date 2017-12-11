<?php
/**
 * Single Sermon Post
 * @package WordPress
 * @subpackage thebranchtheme
 * @since The Branch Theme 1.0
 */

get_header();

// Preacher Object
$preacher = get_field("preacher");

// Series Object
$series = get_field("sermon_series");

// Scripture Object
$scripture = get_field("scripture");

// Topics Oject
$topics = get_field("topics");

// Others
$date = get_field("date");
var_dump($date);

$audio = get_field("audio_file");
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
		</div>
	</div>
</div>

<?php get_footer(); ?>