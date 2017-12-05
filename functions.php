<?php 

function site_enqueue_style() {
	wp_enqueue_style( 'font-awesome.min.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' ); 
	wp_enqueue_style( 'ie10-viewport-bug-workaround.css', get_template_directory_uri() . '/assets/css/ie10-viewport-bug-workaround.css' ); 
	wp_enqueue_style( 'style.css', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'site_enqueue_style' );

function site_enqueue_script() {
	wp_enqueue_script( 'jquery-1.12.4.js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true );
	wp_enqueue_script( 'core.js', get_template_directory_uri() . '/assets/js/core.js' );
	
}
add_action( 'wp_enqueue_scripts', 'site_enqueue_script' );

function admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_node('wp-logo' );
    $wp_admin_bar->remove_menu('new-post');
    $wp_admin_bar->remove_menu('search');
    $wp_admin_bar->remove_menu('updates');  
    $wp_admin_bar->remove_menu('widgets');
}
add_action( 'wp_before_admin_bar_render', 'admin_bar_render' );

function menu_page_removing() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'tools.php' ); 
}
add_action( 'admin_menu', 'menu_page_removing' );

register_nav_menus( array(
	'primary_nav' => __( 'Primary Menu', 'site' ),
) );

