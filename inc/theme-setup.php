<?php
/**
 * Underskeleton Theme Setup.
 *
 * @package underskeleton
 */





if ( ! function_exists( 'underskeleton_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underskeleton_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Underskeleton, use a find and replace
	 * to change 'underskeleton' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'underskeleton', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'underskeleton' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'underskeleton_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Set up the WordPress custom logo feature.
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Add customizer selective refresh
	add_theme_support( 'customize-selective-refresh-widgets' );
	
}
endif;
add_action( 'after_setup_theme', 'underskeleton_setup' );





/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underskeleton_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underskeleton_content_width', 640 );
}
add_action( 'after_setup_theme', 'underskeleton_content_width', 0 );





/**
 * Registers an editor stylesheet for the current theme.
 *
 * @global WP_Post $post Global post object.
 */
function underskeleton_add_editor_styles() {
    add_editor_style( get_stylesheet_directory_uri() . '/css/editor-style.min.css' );
    
    // TODO: Move font settings to a better place
    add_editor_style( 'https://fonts.googleapis.com/css?family=Raleway:300,400,600' );
}
add_action( 'init',          'underskeleton_add_editor_styles' );
add_action( 'pre_get_posts', 'underskeleton_add_editor_styles' );





function underskeleton_custom_logo_login_page() {

	if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$image_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );

		echo "<style type=\"text/css\">
		body.login div#login h1 a {
			background-image: url(". $image_url .");
			-webkit-background-size: auto;
			background-size: auto;
			background-position: center;
			margin: 0 0 25px;
			width: 320px;
		}
		</style>";
	}
}
add_action( 'login_enqueue_scripts', 'underskeleton_custom_logo_login_page' );
