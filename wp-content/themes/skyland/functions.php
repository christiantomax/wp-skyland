<?php

// For Metabox
require_once get_template_directory().'/inc/meta.php';

function my_custom_theme_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo');
    add_theme_support('menus');
	add_theme_support('automatic-feed-links');
	add_filter('use_block_editor_for_post', '__return_false', 10); // Remove Guttenberg

    // Register navigation menu
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');
add_action('admin_init', 'remove_editor');
function remove_editor() {
	remove_post_type_support( 'page', 'editor' );
}

function my_custom_theme_scripts(){
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true );
    wp_enqueue_script( 'property-category', get_template_directory_uri() . '/js/property-category.js' );
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// add css font style
function my_custom_theme_enqueue_styles() {
	include get_theme_file_path( 'config.php' );
    wp_enqueue_style( 'my-custom-theme-fonts', $assets_folder_path . 'style/font.css' );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue_styles' );