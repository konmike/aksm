<?php

add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

//Remove dots from excerpt
// function trim_excerpt($text)
// {
// 	return rtrim($text,'[...]');
// }
// add_filter('get_the_excerpt', 'trim_excerpt');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
// function wpdocs_custom_excerpt_length( $length ) {
//     return 120;
// }
// add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function new_wp_trim_excerpt($text) {
  $raw_excerpt = $text;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text, '<a>');
    $excerpt_length = apply_filters('excerpt_length', 20);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split('/(<a.*?a>)|\n|\r|\t|\s/', $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
    if ( count($words) > $excerpt_length ) {
      array_pop($words);
      $text = implode(' ', $words);
      $text = $text . $excerpt_more;
      } 
    else {
      $text = implode(' ', $words);
      }
    }
  return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);
  }
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');


function themeslug_enqueue_script() {
	wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/script.js', array('jquery'), null, true);

	// wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', false );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.min.css', false );

	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
	// here you can enqueue more js / css files
}

function the_breadcrumb() {
	// $sep = ' > ';
	$sep = ''; //definovan v css
	if (!is_front_page()) {

		// Start the breadcrumb with a link to your homepage
		echo '<ul class="breadcrumb">';
		echo '<li>';
		echo '<a href="';
		echo get_option('home');
		echo '">';
		// bloginfo('name');
		echo 'Domů';
		echo '</a></li>' . $sep;

		// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
		if (is_category() || is_single() ){
			echo '<li>';
			the_category('title_li=');
			echo '</li>';
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
			echo $sep . '<li>';
			the_title();
			echo '</li>';
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
		echo '</ul>';
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
