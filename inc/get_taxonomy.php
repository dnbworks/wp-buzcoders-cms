<?php
// your_theme/functions.php
/**
 * how to list all taxonomy terms
 */
// class all_terms
// {   
//     public function __construct()
//     {   
//         $version = '1';
//         $namespace = 'wl/v' . $version;
//         $base = 'all-terms';
//         register_rest_route($namespace, '/' . $base, array(
//             'methods' => 'GET',
//             'callback' => array($this, 'get_all_terms'),
//         )); 
//     }   
//     public function get_all_terms($object)
//     {  
// 						return "hello world"; 
//         $args = array(
//             'public' => true,
//             '_builtin' => false
//         );  
//         $output = 'names'; // or objects
//         $operator = 'and'; // 'and' or 'or' 
//         $taxonomies = get_taxonomies($args, $output, $operator);
//         foreach ($taxonomies as $key => $taxonomy_name) {
//             if ($taxonomy_name = $_GET['term']) {
//                 $return[] = get_terms(array(
//                     'taxonomy' => $taxonomy_name,
//                     'hide_empty' => false,
//                 )); 
//             }   
//         }   
//         return new WP_REST_Response($return, 200);
//     }   
// }

function get_all_terms($object)
{
	$args = array(
		'public' => true,
		'_builtin' => false
	);
	$output = 'names'; // or objects
	$operator = 'and'; // 'and' or 'or' 
	$taxonomies = get_taxonomies($args, $output, $operator);
	foreach ($taxonomies as $key => $taxonomy_name) {
		if ($taxonomy_name = $_GET['term']) {
			$return[] = get_terms(array(
				'taxonomy' => $taxonomy_name,
				'hide_empty' => false,
			));
		}
	}
	return new WP_REST_Response($return, 200);
}


add_action('rest_api_init', function () {
	register_rest_route('wl/v1', 'all-terms', array(
		'methods' => 'GET',
		'callback' => 'get_all_terms',
	));
});
