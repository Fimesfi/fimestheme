<?php
/**
 * Fimestheme functions and definitions
 * @package Fimestheme
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function fimestheme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	//This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-navigation' => esc_html__( 'Päävalikko', 'fimestheme' ),
		)
	);
	

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', 'fimestheme_setup' );

/**
 * Enqueue scripts and styles.
 */
function fimestheme_scripts() {
	wp_enqueue_style( 'fimestheme-style', get_template_directory_uri() . '/css/style.css', array(), THEME_VERSION );

	//enque jquery script from web cdn
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'fimestheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'fimestheme_scripts' );
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Advanced custom fields blocks
 */
require get_template_directory() . '/inc/acf-blocks.php';