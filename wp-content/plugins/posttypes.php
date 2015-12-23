<?php
	
/*

	* Plugin Name: Custom Post Types
	* Description: Plugin that adds required post types for the Willowick website
	* Version 0.1
	* Author: Nate Robinson
	* License: GPL2

*/


function custom_taxonomies() {
    
//	$labels = array(
//		'name'				=>	'Scents',
//		'singular_name'		=>	'Scent',
//		'search_items'		=>	'Search Scents',
//		'all_items'			=>	'All Scents',
//                'parent_item'           =>      'Parent Scent',
//		'parent_item_colon'	=>	'Parent Scents:',
//		'edit_item'			=>	'Edit Scent',
//		'update_item'			=>	'Update Scent',
//		'add_new_item'		=>	'New Scent',
//                'new_item_name'         =>      'New Scent Name',
//		'menu_name'	 		=>	'Scents',
//	);
//	
//	$args = array(
//		'labels'				=>	$labels,
//		'show_ui'				=>	true,
//		'show_admin_column'			=>	false,
//		'query_var'				=>	true,
//		'rewrite'				=>	array( 'slug' => 'scents'),
//		'hierarchical'			=>	true
//	);
//    
//    register_taxonomy('cat_scent',array('product'),$args);
}
//add_action('init','custom_taxonomies');

//function add_title_as_category( $postid ) {
//  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
//  $post = get_post($postid);
//  if ( $post->post_type == 'scent') { // change 'post' to any cpt you want to target
//    $term = get_term_by('slug', $post->post_name, 'cat_scent');
//    if ( empty($term) && $post->post_title != 'Auto Draft') {
//      $add = wp_insert_term( $post->post_title, 'cat_scent', array('slug'=> $post->post_name) );
//      if ( is_array($add) && isset($add['term_id']) ) {
//        wp_set_object_terms($postid, $add['term_id'], 'cat_scent', true );
//      }
//    }
//  }
//}
//add_action('save_post', 'add_title_as_category');

function post_types() {
//	$labels = array(
//		'name'				=>	'Scents',
//		'singular_name'		=>	'Scent',
//		'menu_name'	 		=>	'Scents',
//		'name_admin_bar'	=>	'Scent',
//		'add_new'			=>	'Add New',
//		'add_new_item'		=>	'New Scent',
//		'edit_item'			=>	'Edit Scent',
//		'view_item'			=>	'View Scent',
//		'all_items'			=>	'All Scents',
//		'search_items'		=>	'Search Scents',
//		'parent_item_colon'	=>	'Parent Scents:',
//		'not_found'			=>	'No scents found',
//		'not_found_in_trash' =>	'No scents found in Trash.'
//	);
//	
//	$args = array(
//		'labels'				=>	$labels,
//		'public'				=>	true,
//		'publicly_queryable'	=>	true,
//		'show_ui'				=>	true,
//		'show_in_menu'			=>	true,
//		'menu_icon'				=>	'dashicons-carrot',
//		'query_var'				=>	true,
//		'rewrite'				=>	array( 'slug' => 'scents'),
//		'capability_type'		=>	'post',
//		'has_archive'			=>	true,
//		'hierarchical'			=>	false,
//		'menu_position'			=>	5,
//		'supports'				=>	array( 'title', 'editor', 'thumbnail')
//	);
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
	register_post_type('testimonial', $args);
        
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
        
//	$labels = array(
//		'name'				=>	'Products',
//		'singular_name'		=>	'Product',
//		'menu_name'	 		=>	'Products',
//		'name_admin_bar'	=>	'Product',
//		'add_new'			=>	'Add New',
//		'add_new_item'		=>	'New Product',
//		'edit_item'			=>	'Edit Product',
//		'view_item'			=>	'View Product',
//		'all_items'			=>	'All Products',
//		'search_items'		=>	'Search Products',
//		'parent_item_colon'	=>	'Parent Products:',
//		'not_found'			=>	'No products found',
//		'not_found_in_trash' =>	'No products found in Trash.'
//	);
//	
//	$args = array(
//		'labels'				=>	$labels,
//                'taxonomies'                    =>  array('cat_scent','post_tag'),
//		'public'				=>	true,
//		'publicly_queryable'	=>	true,
//		'show_ui'				=>	true,
//		'show_in_menu'			=>	true,
//		'menu_icon'				=>	'dashicons-admin-post',
//		'query_var'				=>	true,
//		'rewrite'				=>	array( 'slug' => 'products'),
//		'capability_type'		=>	'page',
//		'has_archive'			=>	false,
//		'hierarchical'			=>	true,
//		'menu_position'			=>	8,
//		'supports'				=>	array( 'title', 'excerpt', 'categories', 'editor', 'thumbnail', 'page-attributes', 'custom-fields')
//	);
//	register_post_type('product', $args);
//        
}
add_action('init', 'post_types');

//Flush rewrite rules to add "scent" as a permalink slug
function my_rewrite_flush() {
	post_types();
        custom_taxonomies();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

?>