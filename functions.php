<?php
/**
 * Main functions file for the WP-Drudge child theme
 *
 * @package WordPress
 * @subpackage WP-Drudge
 */

/*
 * Do not allow this file to be loaded directly
 */

if ( ! function_exists( 'add_action' ) ) {
	die( 'Nothing to do...' );
}

/**
 * Enqueue scripts and styles
 *
 */
function wpd_child_custom_enqueue_scripts() {

	/*
	 * This loads the style.css sheet located in this child theme
	 * If you didn't put any CSS in that file, comment or delete the lines below
	 */

	wp_enqueue_style(
		'wpdrudge-child',
		get_stylesheet_directory_uri() . '/style.css',
		FALSE,
		WP_DRUDGE_CURRENT_VERSION
	);

	/*
	 * Uncommenting the line below will turn off the styles included with the theme
	 * This lets you start from scratch with styling, if necessary
	 */

	// wp_dequeue_style( 'wpdrudge-main' );
}

add_action( 'wp_enqueue_scripts', 'wpd_child_custom_enqueue_scripts', 11 );

/*
 * The functions below are located in the WP-Drudge theme in /inc/display-functions.php
 * You can redeclare these functions to change output in specific places
 * Make sure to use the existing function as a guide to how these should come together
 */

//function wpdrudge_echo_featured() {}

//function wpd_get_top_links() {}

//function wpdrudge_comment( $comment, $args, $depth ) {}

//function wpdrudge_home_link() {}

//function wpdrudge_archive_page_title() {}

//function wpdrudge_category_display() {}

//function wpd_paginate( $post_query = '' ) {}

//function wpdrudge_display_posted_link( $pid ) {}

//function wpdrudge_load_more_posted_links( $list_args, $append_to ) {}

//function wpdrudge_display_post_navigation( $custom_query = '' ) {}

//function wpdrudge_hook_wp_head() {}

