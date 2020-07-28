<?php
/*
Plugin Name: BCCampus Custom Post Type
Description: This is a test plugin for a custom post type
Author: Catherine Meng
*/

add_action( 'init', 'bccamp_custom_post_custom_textbooks' );
add_action( 'init', 'bccamp_custom_block_text_box' );
add_action( 'init', 'bccamp_custom_block_dropdown' );
add_action( 'init', 'bccamp_custom_block_data_fieldn' );

function ht_custom_post_custom_article() {
    $labels = array(
        'name' => __( 'Textbooks' ),
        'singular_name' => __( 'Textbook' ),
        'add_new' => __( 'Add New Textbook' ),
        'add_new_item' => __( 'Add Textbook' ),
        'edit_item' => __( 'Edit Textbook' ),
        );

    $args = array(
        'labels' => $labels,
        'description' => 'Holds custom textbooks post',
        'public' => true,
        'menu_position' => 5, // position blow posts 
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
        'taxonomies' => array( 'Institutions' ),
        'has_archive' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        );
    
    register_post_type('textbooks', $args);
            
}

function bccamp_custom_block_text_box(){
	wp_enqueue_script(
 		'block_text_box',
		plugin_dir_url( __FILE__ ) . 'block_text_box.js',
		array( 'wp-blocks', 'wp-element' ),
		true
	);
}

function bccamp_custom_block_dropdown(){
	wp_enqueue_script(
 		'block_dropdown',
		plugin_dir_url( __FILE__ ) . 'block_dropdown.js',
		array( 'wp-blocks', 'wp-element' ),
		true
    );
    wp_enqueue_style(
		'block_dropdown-css',
		plugin_dir_url( __FILE__ ) . 'block_dropdown-css.css',
        array( 'wp-edit-blocks' ),
        true
	);
}


function bccamp_custom_block_data_field(){
	wp_enqueue_script(
 		'block_data_field',
		plugin_dir_url( __FILE__ ) . 'block_data_field.js',
		array( 'wp-blocks', 'wp-element' ),
		true
	);
}