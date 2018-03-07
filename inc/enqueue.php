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
	wp_enqueue_style( 'underskeleton-style', get_template_directory_uri() . '/css/theme.min.css', array(), underskeleton_get_version() );

	// Scripts
	wp_enqueue_script( 'underskeleton-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), underskeleton_get_version(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underskeleton_scripts' );



/**
 * Binds JS handlers to make Customizer
 * reload changes asynchronously.
 */
function underskeleton_customize_preview_js() {
  wp_enqueue_script( 'underskeleton_customizer', get_template_directory_uri() . '/js/customizer.min.js', array( 'customize-preview' ), underskeleton_get_version(), true );
}
add_action( 'customize_preview_init', 'underskeleton_customize_preview_js' );



/**
 * Registers editor stylesheet
 */
function underskeleton_add_editor_styles() {
  add_editor_style( array( 'css/editor-style.min.css' ) );
}
add_action( 'admin_init', 'underskeleton_add_editor_styles' );
