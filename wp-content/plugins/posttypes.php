<?php
	
/*

	* Plugin Name: Custom Post Types
	* Description: Plugin that adds required post types for the Willowick website
	* Version 0.1
	* Author: Nate Robinson
	* License: GPL2

*/

function post_types() {
	$labels = array(
		'name'				=>	'Scents',
		'singular_name'		=>	'Scent',
		'menu_name'	 		=>	'Scents',
		'name_admin_bar'	=>	'Scent',
		'add_new'			=>	'Add New',
		'add_new_item'		=>	'New Scent',
		'edit_item'			=>	'Edit Scent',
		'view_item'			=>	'View Scent',
		'all_items'			=>	'All Scents',
		'search_items'		=>	'Search Scents',
		'parent_item_colon'	=>	'Parent Scents:',
		'not_found'			=>	'No scents found',
		'not_found_in_trash' =>	'No scents found in Trash.'
	);
	
	$args = array(
		'labels'				=>	$labels,
		'public'				=>	true,
		'publicly_queryable'	=>	true,
		'show_ui'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=>	'dashicons-carrot',
		'query_var'				=>	true,
		'rewrite'				=>	array( 'slug' => 'scents'),
		'capability_type'		=>	'post',
		'has_archive'			=>	true,
		'hierarchical'			=>	false,
		'menu_position'			=>	5,
		'supports'				=>	array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('scent', $args);
        
	$labels = array(
		'name'				=>	'Testimonials',
		'singular_name'		=>	'Testimonial',
		'menu_name'	 		=>	'Testimonials',
		'name_admin_bar'	=>	'Testimonial',
		'add_new'			=>	'Add New',
		'add_new_item'		=>	'New Testimonial',
		'edit_item'			=>	'Edit Testimonial',
		'view_item'			=>	'View Testimonial',
		'all_items'			=>	'All Testimonials',
		'search_items'		=>	'Search Testimonials',
		'parent_item_colon'	=>	'Parent Testimonials:',
		'not_found'			=>	'No testimonials found',
		'not_found_in_trash' =>	'No testimonials found in Trash.'
	);
	
	$args = array(
		'labels'				=>	$labels,
		'public'				=>	true,
		'publicly_queryable'	=>	true,
		'show_ui'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=>	'dashicons-heart',
		'query_var'				=>	true,
		'rewrite'				=>	array( 'slug' => 'testimonials'),
		'capability_type'		=>	'post',
		'has_archive'			=>	true,
		'hierarchical'			=>	false,
		'menu_position'			=>	6,
		'supports'				=>	array( 'title', 'editor', 'thumbnail')
	);
	register_post_type('article', $args);
        
	$labels = array(
		'name'				=>	'News Articles',
		'singular_name'		=>	'News Article',
		'menu_name'	 		=>	'News Articles',
		'name_admin_bar'	=>	'News Article',
		'add_new'			=>	'Add New',
		'add_new_item'		=>	'Create News Article',
		'edit_item'			=>	'Edit News Article',
		'view_item'			=>	'View News Article',
		'all_items'			=>	'All News Articles',
		'search_items'		=>	'Search News Articles',
		'parent_item_colon'	=>	'Parent News Articles:',
		'not_found'			=>	'No news articles found',
		'not_found_in_trash' =>	'No news articles found in Trash.'
	);
	
	$args = array(
		'labels'				=>	$labels,
                'taxonomies'                    =>  array('category', 'post_tag'),
		'public'				=>	true,
		'publicly_queryable'	=>	true,
		'show_ui'				=>	true,
		'show_in_menu'			=>	true,
		'menu_icon'				=>	'dashicons-admin-post',
		'query_var'				=>	true,
		'rewrite'				=>	array( 'slug' => 'articles'),
		'capability_type'		=>	'post',
		'has_archive'			=>	true,
		'hierarchical'			=>	false,
		'menu_position'			=>	7,
		'supports'				=>	array( 'title', 'excerpt', 'custom-fields', 'categories', 'editor', 'thumbnail')
	);
	register_post_type('article', $args);
}
add_action('init', 'post_types');

//Flush rewrite rules to add "scent" as a permalink slug
function my_rewrite_flush() {
	post_types();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

?>