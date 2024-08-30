<?php

require get_theme_file_path('/inc/buzcoders-cpt.php');


function doncodes_script_enqueue()
{
// dynamic css


}
add_action('wp_enqueue_scripts', 'doncodes_script_enqueue');

/*
	==========================================
	 Head function
	==========================================
*/
function doncodes_remove_version()
{
	return '';
}
add_filter('the_generator', 'doncodes_remove_version');

// Customize excerpt word count length
function custom_excerpt_length()
{
	return 22;
}
add_filter('excerpt_length', 'custom_excerpt_length');


function doncodes_theme_setup()
{

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'doncodes_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/


add_theme_support('post-thumbnails', array(
	'post',
	'page',
	'project',
));
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5', array('search-form'));
add_image_size('newsImageLandscape', 280, 200, true);


function themename_custom_logo_setup()
{
	$defaults = array(
		'width'                => 150,
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

/*
	==========================================
	 Custom Post Type
	==========================================
*/



function iplc_features()
{
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'iplc_features');








