<?php

/* enqueue scripts and style from parent and child theme */        
function cdChild_styles() {

	wp_dequeue_style( 'twenty-twenty-one-style' );
	wp_deregister_style( 'twenty-twenty-one-style' );


	wp_enqueue_style( '2021parent', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child', get_stylesheet_directory_uri() . '/dist/styles/main.css' );

}
add_action( 'wp_enqueue_scripts', 'cdChild_styles', 20);


/**
 * Register and Enqueue Scripts.
 */
function cd_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'cd-js', get_stylesheet_directory_uri() . '/dist/scripts/main.js', array(), $theme_version, false );
	wp_script_add_data( 'cd-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'cd_register_scripts' );

