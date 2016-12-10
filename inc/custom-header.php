<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package underskeleton
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses underskeleton_header_style()
 */
function underskeleton_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'underskeleton_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'underskeleton_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'underskeleton_custom_header_setup' );

if ( ! function_exists( 'underskeleton_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see underskeleton_custom_header_setup().
 */
function underskeleton_header_style() {
	// If we get this far, we have custom styles. Let's do this.
	?>
	<?php
	// Has the text been hidden?
	if ( ! display_header_text() ) :
	?>
	<style type="text/css">
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	</style>
	<?php endif; ?>
	<?php
}
endif;
