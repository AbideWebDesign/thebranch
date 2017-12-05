<?php
/**
 * Template Name: Sermons Landing
 * @package WordPress
 * @subpackage thebranchtheme
 * @since The Branch Theme 1.0
 */

get_header(); ?>

<?php
	
		
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Sermons</h2>
			<ul class="list-inline">
				<li><a href="/scripture">Scripture</a></li>
				<li><a href="/topics">Topics</a></li>
				<li><a href="/series">Series</a></li>
				<li><a href="/preacher">Preacher</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="search-box">
				<form role="search" method="get" class="search-form" action="<?php echo get_permalink(61); ?>">
					<label>
						<span class="screen-reader-text">Search for:</span>
						<input type="search" class="search-field" placeholder="Search …" value="" name="swpquery" title="Search for:">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/block', 'current-series'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/block', 'recent-series'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php get_template_part('template-parts/block', 'latest-sermons'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>