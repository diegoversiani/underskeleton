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
	wp_enqueue_script( 'underskeleton-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// !== Scripts
}
add_action( 'wp_enqueue_scripts', 'underskeleton_scripts' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function underskeleton_customize_preview_js() {
  wp_enqueue_script( 'underskeleton_customizer', get_template_directory_uri() . '/js/customizer.min.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'underskeleton_customize_preview_js' );
