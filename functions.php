<?php



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


add_theme_support('post-thumbnails');
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


// function doncodes_custom_post_type (){
	
// 	$labels = array(
// 		'name' => 'Projects',
// 		'singular_name' => 'Project',
// 		'add_new' => 'Add New Project',
// 		'all_items' => 'All Projects',
// 		'add_new_item' => 'Add Project',
// 		'edit_item' => 'Edit Project',
// 		'new_item' => 'New Project',
// 		'view_item' => 'View Project',
// 		'search_item' => 'Search Project',
// 		'not_found' => 'No Project found',
// 		'not_found_in_trash' => 'No Projects found in trash',
// 		'parent_item_colon' => 'Parent Item'
// 	);
// 	$args = array(
// 		'rewrite' => array('slug' => 'projects'), // rewrites the url format
// 		'labels' => $labels,
// 		'public' => true,
// 		'has_archive' => true,
// 		'publicly_queryable' => true,
// 		'query_var' => true,
// 		'capability_type' => 'post',
// 		'hierarchical' => false,
// 		'show_in_rest' => true, // To use Gutenberg editor
// 		'supports' => array(
// 			'title',
// 			'editor',
// 			'excerpt',
// 			'thumbnail',
// 			'revisions',
// 		),
// 		'menu_position' => 5,
// 		'exclude_from_search' => false,
// 	);
// 	register_post_type('project', $args);
// }
// add_action('init','doncodes_custom_post_type');

// function doncodes_project_custom_taxonomies() {
	
// 	//add new taxonomy hierarchical
// 	$labels = array(
// 		'name' => 'Fields',
// 		'singular_name' => 'Field',
// 		'search_items' => 'Search Fields',
// 		'all_items' => 'All Fields',
// 		'parent_item' => 'Parent Field',
// 		'parent_item_colon' => 'Parent Field:',
// 		'edit_item' => 'Edit Field',
// 		'update_item' => 'Update Field',
// 		'add_new_item' => 'Add New Work Field',
// 		'new_item_name' => 'New Field Name',
// 		'menu_name' => 'Fields'
// 	);
	
// 	$args = array(
// 		'hierarchical' => true,
// 		'labels' => $labels,
// 		'show_ui' => true,
// 		'show_admin_column' => true,
// 		'query_var' => true,
// 		'rewrite' => array( 'slug' => 'field' )
// 	);
	
// 	register_taxonomy('field', array('project'), $args);
	
// 	//add new taxonomy NOT hierarchical
	
// 	register_taxonomy('software', 'project', array(
// 		'label' => 'Software',
// 		'rewrite' => array( 'slug' => 'software' ),
// 		'hierarchical' => false
// 	) );

// 	register_taxonomy('tech', 'project', array(
// 		'label' => 'tech',
// 		'rewrite' => array( 'slug' => 'tech' ),
// 		'hierarchical' => false
// 	) );
	
// }

// add_action( 'init' , 'doncodes_project_custom_taxonomies' );






