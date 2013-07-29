<?php
/*
Plugin Name: FooDocs
Plugin URI: https://github.com/royby/foodocs
Description: Organized documentation for your digital products
Author: Roy Hornsby
Author URI: http://royby.com
Version: 0.1-alpha
*/

if ( !class_exists('FooDocs') ) {
	class FooDocs {
		function __construct() {
			//this runs when the class is instantiated
			add_action( 'init', array($this, 'register_custom_post_type') );
		}

		function register_custom_post_type() {
			$labels = array(
				'name' => __( 'Documentation', 'foodocs' ),
				'singular_name' => __( 'Documentation', 'foodocs' ),
				'add_new' => __( 'Add New', 'foodocs' ),
				'add_new_item' => __( 'Add New Documentation', 'foodocs' ),
				'edit_item' => __( 'Edit Documentation', 'foodocs' ),
				'new_item' => __( 'New Documentation', 'foodocs' ),
				'view_item' => __( 'View Documentation', 'foodocs' ),
				'search_items' => __( 'Search Documentation', 'foodocs' ),
				'not_found' => __( 'No documentation found', 'foodocs' ),
				'not_found_in_trash' => __( 'No documentation found in Trash', 'foodocs' ),
				'parent_item_colon' => __( 'Parent Documentation:', 'foodocs' ),
				'menu_name' => __( 'Documentation', 'foodocs' ),
			);

			$args = array(
				'labels' => $labels,
				'hierarchical' => true,
				'description' => 'Documentation for a your digital products',
				'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments' ),
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'show_in_nav_menus' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'has_archive' => true,
				'query_var' => true,
				'can_export' => true,
				'rewrite' => true,
				'capability_type' => 'page'
			);

			register_post_type( 'foodocs', $args );
		}
	}
}

$GLOBALS['FooDocs'] = new FooDocs();