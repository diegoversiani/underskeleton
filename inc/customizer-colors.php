<?php
/**
 * Underskeleton Color Customizer.
 *
 * @package underskeleton
 */

/*------------------------------------*\
  #SETTINGS
\*------------------------------------*/
function underskeleton_colors_customizer( $wp_customize ) {

    /* REMOVE: HEADER TEXT COLOR */
    $wp_customize->remove_control('header_textcolor');


    /* SEPARATOR: Brand Colors */
    $wp_customize->add_setting( 'underskeleton_brand_colors_separator', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        ));
    $wp_customize->add_control( new WP_Separator_Customize_Control( 
        $wp_customize,
        'underskeleton_brand_colors_separator',
        array(
            'label'     => __( 'Brand Colors', 'underskeleton' ),
            'section'   => 'colors',
            'priority'  => 20,
            'settings'  => 'underskeleton_brand_colors_separator',
        )));

    /* SETTING: PRIMARY COLOR */
    $wp_customize->add_setting( 'underskeleton_primary_color', array(
        'default'       => '#d72d5c',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_primary_color',
        array(
            'label'     => __( 'Primary Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_primary_color',
            'priority'  => 20,
        )));

    /* SETTING: SECONDARY COLOR */
    $wp_customize->add_setting( 'underskeleton_secondary_color', array(
        'default'       => '#155d4f',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_secondary_color',
        array(
            'label'     => __( 'Secondary Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_secondary_color',
            'priority'  => 20,
        )));

    /* SETTING: TERTIARY COLOR */
    $wp_customize->add_setting( 'underskeleton_tertiary_color', array(
        'default'       => '#264a5c',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_tertiary_color',
        array(
            'label'     => __( 'Tertiary Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_tertiary_color',
            'priority'  => 20,
        )));




    /* SEPARATOR: Text Colors */
    $wp_customize->add_setting( 'underskeleton_text_colors_separator', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        ));
    $wp_customize->add_control( new WP_Separator_Customize_Control( 
        $wp_customize,
        'underskeleton_text_colors_separator',
        array(
            'label'     => __( 'Text Colors', 'underskeleton' ),
            'section'   => 'colors',
            'priority'  => 30,
            'settings'  => 'underskeleton_text_colors_separator',
        )));

    /* SETTING: TEXT COLOR */
    $wp_customize->add_setting( 'underskeleton_text_color', array(
        'default'       => '#222',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_text_color',
        array(
            'label'     => __( 'Text Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_text_color',
            'priority'  => 30,
        )));

    /* SETTING: HEADING COLOR */
    $wp_customize->add_setting( 'underskeleton_heading_color', array(
        'default'       => '#d72d5c',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_heading_color',
        array(
            'label'     => __( 'Heading Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_heading_color',
            'priority'  => 30,
        )));

    /* SETTING: LINK COLOR */
    $wp_customize->add_setting( 'underskeleton_link_color', array(
        'default'       => '#155d4f',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_link_color',
        array(
            'label'     => __( 'Link Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_link_color',
            'priority'  => 30,
        )));

    /* SETTING: LINK HOVER COLOR */
    $wp_customize->add_setting( 'underskeleton_link_hover_color', array(
        'default'       => '#10483d',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_link_hover_color',
        array(
            'label'     => __( 'Link Hover Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_link_hover_color',
            'priority'  => 30,
        )));




    /* SEPARATOR: Button Colors */
    $wp_customize->add_setting( 'underskeleton_button_colors_separator', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        ));
    $wp_customize->add_control( new WP_Separator_Customize_Control( 
        $wp_customize,
        'underskeleton_button_colors_separator',
        array(
            'label'     => __( 'Button Colors', 'underskeleton' ),
            'section'   => 'colors',
            'priority'  => 30,
            'settings'  => 'underskeleton_button_colors_separator',
        )));

    /* SETTING: BUTTON TEXT COLOR */
    $wp_customize->add_setting( 'underskeleton_button_text_color', array(
        'default'       => '#fff',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_text_color',
        array(
            'label'     => __( 'Button Text Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_button_text_color',
            'priority'  => 30,
        )));

    /* SETTING: BUTTON HOVER TEXT COLOR */
    $wp_customize->add_setting( 'underskeleton_button_hover_text_color', array(
        'default'       => '#fff',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_hover_text_color',
        array(
            'label'     => __( 'Button Hover Text Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_button_hover_text_color',
            'priority'  => 30,
        )));

    /* SETTING: BUTTON BACKGROUND COLOR */
    $wp_customize->add_setting( 'underskeleton_button_background_color', array(
        'default'       => '#155d4f',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_background_color',
        array(
            'label'     => __( 'Button Background Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_button_background_color',
            'priority'  => 30,
        )));

    /* SETTING: BUTTON HOVER BACKGROUND COLOR */
    $wp_customize->add_setting( 'underskeleton_button_hover_background_color', array(
        'default'       => '#10483d',
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'transport'     => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_hover_background_color',
        array(
            'label'     => __( 'Button Hover Background Color', 'underskeleton' ),
            'section'   => 'colors',
            'settings'  => 'underskeleton_button_hover_background_color',
            'priority'  => 30,
        )));

}
add_action('customize_register', 'underskeleton_colors_customizer');





/*------------------------------------*\
  #COLORS OUTPUT
\*------------------------------------*/
function underskeleton_colors_customizer_output() {
    ?>
    <!--Customizer Colors-->
    <style type="text/css">
        /* default text color */
        body { color: <?php echo esc_attr( get_theme_mod( 'underskeleton_text_color', '#222' ) ); ?>; }
        /* Headings */
        h1, h2, h3, h4, h5, h6 { color: <?php echo esc_attr( get_theme_mod( 'underskeleton_heading_color', '#d72d5c' ) ); ?>; }
        /* Links */
        a { color: <?php echo esc_attr( get_theme_mod( 'underskeleton_link_color', '#155d4f' ) ); ?>; }
        a:hover, a:focus, a:active { color: <?php echo esc_attr( get_theme_mod( 'underskeleton_link_hover_color', '#10483d' ) . (is_customize_preview() ? ' !important' : '') ); ?>; }
        /* Default Buttons */
        .button, button, input[type=submit], input[type=reset], input[type=button] {
            color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_text_color', '#fff' ) ); ?>;
            background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_background_color', '#155d4f' ) ); ?>;
        }
        .button:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover {
            color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_hover_text_color', '#fff' ) ) . (is_customize_preview() ? ' !important' : '') ; ?>;
            background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_hover_background_color', '#10483d' ) . (is_customize_preview() ? ' !important' : '') ); ?>;
        }
        /* Color Modifiers */
        .primary-background { background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_primary_color', '#d72d5c' ) ); ?>; }
        .secondary-background { background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_secondary_color', '#155d4f' ) ); ?>; }
        .tertiary-background { background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_tertiary_color', '#264a5c' ) ); ?>; }
    </style> 
    <!--/Customizer Colors-->
    <?php
}
add_action('wp_head', 'underskeleton_colors_customizer_output');
