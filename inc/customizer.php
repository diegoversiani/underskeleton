<?php
/**
 * Underskeleton Theme Customizer.
 *
 * @package underskeleton
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
function underskeleton_static_front_page_customizer( $wp_customize ) {

    /* SETTING: SHOW HOMEPAGE CONTENT */
    $wp_customize->add_setting( 'underskeleton_show_homepage_content', array(
        'default'   => true,
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( 'underskeleton_show_homepage_content', array(
        'label'     => __( 'Show Homepage Content', 'underskeleton' ),
        'description' => __( 'Show the content of the page selected as <code>Static Homepage</code>. The homepage supports adding widgets in the content area. We recommend using the plugin "Customizer Building Blocks" to create your homepage.', 'underskeleton' ),
        'section'   => 'static_front_page',
        'type'      => 'checkbox',
        'default'   => true
        ));

}
add_action('customize_register', 'underskeleton_static_front_page_customizer');





/*------------------------------------*\
  #PAGE SETTINGS
\*------------------------------------*/
function underskeleton_page_settings_customizer( $wp_customize ) {

    /* SECTION: PAGE SETTINGS */
    $wp_customize->add_section( 'underskeleton_page_settings_section' , array(
        'title'       => __( 'Page settings', 'underskeleton' ),
        'description' => __( 'Configure how pages are displayed.', 'underskeleton' ),
        ));

    /* SETTING: LIMIT HEADER TO CONTAINER */
    $wp_customize->add_setting( 'underskeleton_header_container_class', array(
        'default'   => true,
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( 'underskeleton_header_container_class', array(
        'label'     => __( 'Limit header content to container', 'underskeleton' ),
        'section'   => 'underskeleton_page_settings_section',
        'type'      => 'checkbox',
        'default'   => true
        ));

    /* SETTING: LIMIT CONTENT TO CONTAINER */
    $wp_customize->add_setting( 'underskeleton_content_container_class', array(
        'default'   => true,
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( 'underskeleton_content_container_class', array(
        'label'     => __( 'Limit content to container', 'underskeleton' ),
        'section'   => 'underskeleton_page_settings_section',
        'type'      => 'checkbox',
        'default'   => true
        ));

    /* SETTING: LIMIT FOOTER TO CONTAINER */
    $wp_customize->add_setting( 'underskeleton_footer_container_class', array(
        'default'   => true,
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( 'underskeleton_footer_container_class', array(
        'label'     => __( 'Limit footer content to container', 'underskeleton' ),
        'section'   => 'underskeleton_page_settings_section',
        'type'      => 'checkbox',
        'default'   => true
        ));

}
add_action('customize_register', 'underskeleton_page_settings_customizer');