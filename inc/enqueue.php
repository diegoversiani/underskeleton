<?php
/**
 * Underskeleton Theme Enqueue scripts and styles.
 *
 * @package underskeleton
 */

/**
 * Enqueue scripts and styles.
 */
function underskeleton_scripts() {

	// Styles
	wp_enqueue_style( 'underskeleton-style', get_stylesheet_directory_uri() . '/css/theme.min.css' );
	// !== Styles

	// == Scripts
	wp_enqueue_script( 'underskeleton-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.0.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// !== Scripts
}
add_action( 'wp_enqueue_scripts', 'underskeleton_scripts' );