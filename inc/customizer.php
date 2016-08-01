<?php
/**
 * UnderSkeleton Theme Customizer.
 *
 * @package UnderSkeleton
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function underskeleton_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'underskeleton_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function underskeleton_customize_preview_js() {
	wp_enqueue_script( 'underskeleton_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'underskeleton_customize_preview_js' );





/*------------------------------------*\
  #HOMEPAGE
\*------------------------------------*/
function underskeleton_homepage_customizer( $wp_customize ) {

    /* SECTION: HOMEPAGE */
    $wp_customize->add_section( 'underskeleton_homepage_section' , array(
        'title'       => __( 'Homepage', 'underskeleton' ),
        'description' => __( 'Settings for Homepage', 'underskeleton' ),
        ));

    /* SETTING: SHOW HOMEPAGE CONTENT */
    $wp_customize->add_setting( 'underskeleton_show_homepage_content', array(
        'default'   => true,
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( 'underskeleton_show_homepage_content', array(
        'label'     => __( 'Show Homepage Content', 'underskeleton' ),
        'description' => __( 'Show the content of the page selected as <code>Static Homepage</code>', 'underskeleton' ),
        'section'   => 'underskeleton_homepage_section',
        'type'      => 'checkbox',
        'default'   => true
        ));

}
add_action('customize_register', 'underskeleton_homepage_customizer');