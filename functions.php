<?php

//Remove dots from excerpt
function trim_excerpt($text)
{
	return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');

function themeslug_enqueue_script() {
	wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/script.js', array('jquery'), null, true);

	wp_enqueue_style( 'index', get_stylesheet_directory_uri() . '/css/index.css', false );

	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
	// here you can enqueue more js / css files
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	register_nav_menu( 'menu--side-mala-schola', __( 'Side menu Malá schola' ) );
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 210, 118 );
