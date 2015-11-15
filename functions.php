<?php

/**
 *
 * @package WordPress
 * @subpackage jpqpress
 * @since jpmpress 1.0
 *
 * Last Revised: Oct 5, 2015
 */

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 768;

if ( ! function_exists('jqmpress_theme_features') ) {

// Register Theme Features
function jqmpress_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	 // Set custom thumbnail dimensions
	set_post_thumbnail_size( 80, 80, true );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'jqmpress_theme_features' );

}

function custom_jqmpress_loader() {
wp_enqueue_style( 'jqm-style', get_template_directory_uri().'/assets/jqm/jquery.mobile-1.4.5.min.css', false , '1.4.5', 'all' );
wp_enqueue_style( 'jpmpress-style', get_template_directory_uri().'/assets/css/style.css', false , '1.0', 'all' );
wp_enqueue_script( 'jqmpress-mobile-script', get_template_directory_uri() .'/assets/js/mobilechanges.js', array( 'jquery' ), '1', true );
wp_enqueue_script( 'jqm-script', get_template_directory_uri() .'/assets/jqm/jquery.mobile-1.4.5.min.js', array( 'jqmpress-mobile-script' ), '1.4.5', true );
wp_enqueue_script( 'jqmpress-script', get_template_directory_uri() .'/assets/js/script.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_jqmpress_loader' );

if ( ! function_exists( 'jqmpress_posted_on' ) ) :
  
  function jqmpress_posted_on() {
    printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'jqmpress' ),
      esc_url( get_permalink() ),
      esc_attr( get_the_time() ),
      esc_attr( get_the_date( 'c' ) ),
      esc_html( get_the_date() ),
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      esc_attr( sprintf( __( 'View all posts by %s', 'jqmpress' ), get_the_author() ) ),
      esc_html( get_the_author() )
    );
  }
endif;