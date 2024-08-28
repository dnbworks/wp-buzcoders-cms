<?php

/**
 * Plugin Name: Custom API
 * Plugin URI: https://buzcoders.com
 * Description: Nice post api
 * Version: 1.0
 * Author: Dooyong
 * Author URI: https://buzcoders.com
 */


function wl_posts()
{
	$args = [
		'numberposts' => 99999,
		'post_type' => 'post'
	];

	$posts = get_posts($args);

	$data = [];
	$i = 0;

	foreach ($posts as $post) {
		$data[$i]['id'] = $post->ID;
		$data[$i]['title'] = $post->post_title;
		$data[$i]['excerpt'] = $post->post_excerpt;
		$data[$i]['slug'] = $post->post_name;
		$data[$i]['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
		$data[$i]['featured_image']['medium'] = get_the_post_thumbnail_url($post->ID, 'medium');
		$data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
		$i++;
	}

	return $data;
}

function wl_post($slug)
{
	$args = [
		'name' => $slug['slug'],
		'post_type' => 'post'
	];

	$post = get_posts($args);


	$data['id'] = $post[0]->ID;
	$data['title'] = $post[0]->post_title;
	$data['content'] = $post[0]->post_content;
	$data['slug'] = $post[0]->post_name;
	$data['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post[0]->ID, 'thumbnail');
	$data['featured_image']['medium'] = get_the_post_thumbnail_url($post[0]->ID, 'medium');
	$data['featured_image']['large'] = get_the_post_thumbnail_url($post[0]->ID, 'large');

	return $data;
}

function wl_project($slug) {
	$args = [
		'name' => $slug['slug'],
		'post_type' => 'event'
	];

	$post = get_posts($args);


	$data['id'] = $post->ID;
	$data['title'] = $post->post_title;
	$data['slug'] = $post->post_name;
	$data['excerpt'] = $post->post_excerpt;
	$data['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post[0]->ID, 'thumbnail');
	$data['featured_image']['medium'] = get_the_post_thumbnail_url($post[0]->ID, 'medium');
	$data['featured_image']['large'] = get_the_post_thumbnail_url($post[0]->ID, 'large');
	$data['banner-image'] = get_field('banner_image_1080_x1080', $post->ID);
	$data['first_image'] = get_field('first_image', $post->ID);
	$data['challenges_and_solution'] = get_field('challenges_and_solution', $post->ID);
	$data['intro'] = get_field('intro', $post->ID);
	$data['second_image_1080_x1080'] = get_field('second_image_1080_x1080', $post->ID);
	$data['the_website_design'] = get_field('the_website_design', $post->ID);
	$data['the_website_design'] = get_field('the_website_design', $post->ID);
}


function wl_projects()
{
	$args = [
		'numberposts' => 99999,
		'post_type' => 'event'
	];

	$posts = get_posts($args);

	$data = [];
	$i = 0;

	foreach ($posts as $post) {
		$data[$i]['id'] = $post->ID;
		$data[$i]['title'] = $post->post_title;
		$data[$i]['slug'] = $post->post_name;
		$data[$i]['excerpt'] = $post->post_excerpt;
		$data['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post[0]->ID, 'thumbnail');
		$data['featured_image']['medium'] = get_the_post_thumbnail_url($post[0]->ID, 'medium');
		$data['featured_image']['large'] = get_the_post_thumbnail_url($post[0]->ID, 'large');

		$i++;
	}

	return $data;
}

add_action('rest_api_init', function () {
	register_rest_route('wl/v1', 'posts', [
		'methods' => 'GET',
		'callback' => 'wl_posts',
	]);

	register_rest_route('wl/v1', 'posts/(?P<slug>[a-zA-Z0-9-]+)', array(
		'methods' => 'GET',
		'callback' => 'wl_post',
	));


	register_rest_route('wl/v1', 'projects', [
		'methods' => 'GET',
		'callback' => 'wl_projects',
	]);

	register_rest_route( 'wl/v1', 'projects/(?P<slug>[a-zA-Z0-9-]+)', array(
		'methods' => 'GET',
		'callback' => 'wl_project',
    ) );
});
