<?php

add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

//Remove dots from excerpt
function trim_excerpt($text)
{
	return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');

function themeslug_enqueue_script() {
	wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/script.js', array('jquery'), null, true);

	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', false );

	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
	// here you can enqueue more js / css files
}

function the_breadcrumb() {
	$sep = ' > ';
	if (!is_front_page()) {

		// Start the breadcrumb with a link to your homepage
		echo '<div class="breadcrumbs">';
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo '</a>' . $sep;

		// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
		if (is_category() || is_single() ){
			the_category('title_li=');
		} elseif (is_archive() || is_single()){
			if ( is_day() ) {
				printf( __( '%s', 'text_domain' ), get_the_date() );
			} elseif ( is_month() ) {
				printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
			} elseif ( is_year() ) {
				printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
			} else {
				_e( 'Blog Archives', 'text_domain' );
			}
		}

		// If the current page is a single post, show its title with the separator
		if (is_single()) {
			echo $sep;
			the_title();
		}

		// If the current page is a static page, show its title.
		if (is_page()) {
			the_title('<span>','</span>');
		}

		// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
		if (is_home()){
			global $post;
			$page_for_posts_id = get_option('page_for_posts');
			if ( $page_for_posts_id ) {
				$post = get_page($page_for_posts_id);
				setup_postdata($post);
				the_title();
				rewind_posts();
			}
		}
		echo '</div>';
	}
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	//register_nav_menu( 'menu--side-mala-schola', __( 'Side menu Malá schola' ) );
}

add_image_size( 'card-cover', 250, 250 );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 210, 118 );
