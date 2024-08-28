<?php

function buzcoders_custom_post_type (){
	
	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'add_new' => 'Add New Project',
		'all_items' => 'All Projects',
		'add_new_item' => 'Add Project',
		'edit_item' => 'Edit Project',
		'new_item' => 'New Project',
		'view_item' => 'View Project',
		'search_item' => 'Search Project',
		'not_found' => 'No Project found',
		'not_found_in_trash' => 'No Projects found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		// adding it to rest api
		// 'show_in_rest' => true, 
		'rewrite' => array('slug' => 'projects'), // rewrites the url format
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'menu_position' => 5,
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-calendar'
	);
	register_post_type('project', $args);
}
add_action('init','buzcoders_custom_post_type');

function buzcoders_event_custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Industries',
		'singular_name' => 'Industry',
		'search_items' => 'Search Industries',
		'all_items' => 'All Industries',
		'parent_item' => 'Parent Industry',
		'parent_item_colon' => 'Parent Industry:',
		'edit_item' => 'Edit Industry',
		'update_item' => 'Update Industry',
		'add_new_item' => 'Add New Work Industry',
		'new_item_name' => 'New Industry Name',
		'menu_name' => 'Industries'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'Industry' )
	);
	
	register_taxonomy('field', array('project'), $args);

	//// new taxonomy 

		$labels = array(
			'name' => 'Technologies',
			'singular_name' => 'Technology',
			'search_items' => 'Search Technologies',
			'all_items' => 'All Technologies',
			'parent_item' => 'Parent Technology',
			'parent_item_colon' => 'Parent Technology:',
			'edit_item' => 'Edit Technology',
			'update_item' => 'Update Technology',
			'add_new_item' => 'Add New Technology',
			'new_item_name' => 'New Technology Name',
			'menu_name' => 'Technologies'
		);
		
		register_taxonomy('technology', array('project'), array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'Technology' )
		));
	


		$labels = array(
			'name' => 'Services',
			'singular_name' => 'Service',
			'search_items' => 'Search Services',
			'all_items' => 'All Services',
			'parent_item' => 'Parent Service',
			'parent_item_colon' => 'Parent Service:',
			'edit_item' => 'Edit Service',
			'update_item' => 'Update Service',
			'add_new_item' => 'Add New Service',
			'new_item_name' => 'New Service Name',
			'menu_name' => 'Services'
		);
		
		register_taxonomy('service', array('project'), array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'service' )
		));
	
	//add new taxonomy NOT hierarchical
	
	// register_taxonomy('software', 'event', array(
	// 	'label' => 'Software',
	// 	'rewrite' => array( 'slug' => 'software' ),
	// 	'hierarchical' => false
	// ) );
	
}

add_action( 'init' , 'buzcoders_event_custom_taxonomies' );





