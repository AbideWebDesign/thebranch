<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage thebranchtheme
 * @since The Branch Theme 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/block-current', 'series'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/block-featured', 'event'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>