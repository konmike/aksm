<?php

//Remove dots from excerpt
function trim_excerpt($text)

{
return rtrim($text,'[...]');
}

add_filter('get_the_excerpt', 'trim_excerpt');

function themeslug_enqueue_script() {
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery', 'jquery-ui-accordion' ), '1.0.0', true );

    //wp_enqueue_style( 'mycustomCss', get_stylesheet_directory_uri() . '/css/style.css', false );
    wp_enqueue_style( 'index', get_stylesheet_directory_uri() . '/css/index.css', false );
    //wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', false );
//    wp_enqueue_style( 'flikcity', get_stylesheet_directory_uri() . '/css/flickity.css', false );
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
	// here you can enqueue more js / css files
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 210, 118 );

function tag_posts($query)
{
	if ($query->is_tag || $query->is_search)
	{
		$query->set('posts_per_page', '-1' );
		$query->set( 'orderby', array('title' => 'ASC') );
	}
}
add_action('pre_get_posts', 'tag_posts');
