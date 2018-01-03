<?php 

function dl_enqueue_style() {
	$theme_data = wp_get_theme();

	/* Register Custom Scripts */

	wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, null, 'screen');
	wp_register_style('bootstrap-theme','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', null, null, 'screen');
	wp_register_style('Rubik-font','https://fonts.googleapis.com/css?family=Catamaran|Rubik:300', null, null, 'screen');
	wp_register_style('generalStyle', get_parent_theme_file_uri('/assets/css/general-style.css'), null, null, 'screen');
	wp_register_style('flexslider', get_parent_theme_file_uri('/assets/css/style.css'), null, null, 'screen');
	wp_register_style('font-awesome','https://use.fontawesome.com/releases/v5.0.2/css/all.css', null, null, 'screen');


	wp_enqueue_style('bootstrap');
	wp_enqueue_style('bootstrap-theme');
	wp_enqueue_style('Rubik-font');
	wp_enqueue_style('generalStyle');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('font-awesome');
}


add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>