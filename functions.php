<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function load_style() {
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all' );
	wp_enqueue_style( 'custom' );
}

add_action( 'wp_enqueue_scripts', 'load_style' );
function add_js() {
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-3.6.0.min.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'beer', get_template_directory_uri() . '/js/libs/BeerSlider.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'beer' );
	wp_register_script( 'tabsSlider', get_template_directory_uri() . '/js/libs/tabsSlider.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'tabsSlider' );
	wp_register_script( 'swiper-bundle', get_template_directory_uri() . '/js/libs/swiper-bundle.min.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'swiper-bundle' );
	wp_register_script( 'practicles', get_template_directory_uri() . '/js/libs/particles.min.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'practicles' );
	wp_register_script( 'header', get_template_directory_uri() . '/js/header.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'header' );
	wp_register_script( 'beer-slider', get_template_directory_uri() . '/js/beer-slider.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'beer-slider' );
	wp_register_script( 'swiper', get_template_directory_uri() . '/js/swiper-sliders.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'swiper' );
	wp_register_script( 'hidden-box', get_template_directory_uri() . '/js/hidden-box.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'hidden-box' );
	wp_register_script( 'pop-up', get_template_directory_uri() . '/js/pop-up.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'pop-up' );
	wp_register_script( 'tabs', get_template_directory_uri() . '/js/tabs.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'tabs' );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'modernizr' );
	wp_register_script( 'threeD', get_template_directory_uri() . '/js/three-d.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'threeD' );
	wp_register_script( 'accordions', get_template_directory_uri() . '/js/accordions.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'accordions' );
	wp_register_script( 'preloader', get_template_directory_uri() . '/js/preloader.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'preloader' );
	wp_register_script( 'custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1 );
	wp_enqueue_script( 'custom' );
}

add_action( 'wp_enqueue_scripts', 'add_js' );
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
	// additional image sizes
	// delete the next line if you do not need additional image sizes
	add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
}
set_post_thumbnail_size( 150, 150 ); // 50 pixels wide by 50 pixels tall, resize mode
the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
the_post_thumbnail(); // Without parameter ->; Thumbnail
the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' ); // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'medium_large' ); // Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail( 'large' ); // Large resolution (default 1024px x 1024px max)
the_post_thumbnail( 'full' ); // Original image resolution (unmodified)
the_post_thumbnail( array( 100, 100 ) ); // Other resolutions (height, width)
add_filter( 'acf/fields/google_map/api', 'my_acf_google_map_api' );
// function my_acf_google_map_api( $args ) {
//     $args['key'] = 'AIzaSyDdgHgUQaMJNRNhcE8BN3FT505NHw4yMsU';
//     return $args;
// }
function my_acf_google_map_api( $args ) {
	$args['key'] = 'AIzaSyDdgHgUQaMJNRNhcE8BN3FT505NHw4yMsU';

	return $args;
}

function new_excerpt_length( $length ) {
	return 9999;
}

add_filter( 'excerpt_length', 'new_excerpt_length' );
function embed_responsive_autoplay( $code ) {
	if ( strpos( $code, 'youtu.be' ) !== false || strpos( $code, 'youtube.com' ) !== false ) {
		$return = preg_replace( '@embed/([^"&]*)@', 'embed/$1&showinfo=0&autoplay=1', $code );

		return '<div class="embed-container">' . $return . '</div>';
	}

	return '<div class="embed-container">' . $code . '</div>';
}

add_filter( 'embed_oembed_html', 'embed_responsive_autoplay' );
add_filter( 'video_embed_html', 'embed_responsive_autoplay' );

function display_print_r_based_on_ip( $data_to_print ) {
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	if ( $visitor_ip == '213.230.102.124' ) {

		echo '<pre>';
		print_r( $data_to_print );
		echo '</pre>';
		exit;
	}
}