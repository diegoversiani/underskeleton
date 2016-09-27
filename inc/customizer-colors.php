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

    /* SETTING: TEXT COLOR */
    $wp_customize->add_setting( 'underskeleton_text_color', array(
        'default'   => '#222',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_text_color',
        array(
            'label' => __( 'Text Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_text_color',
            'priority' => 10,
        )
        ));

    /* SETTING: HEADING COLOR */
    $wp_customize->add_setting( 'underskeleton_heading_color', array(
        'default'   => '#d72d5c',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_heading_color',
        array(
            'label' => __( 'Heading Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_heading_color',
            'priority' => 10,
        )
        ));

    /* SETTING: LINK COLOR */
    $wp_customize->add_setting( 'underskeleton_link_color', array(
        'default'   => '#155d4f',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_link_color',
        array(
            'label' => __( 'Link Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_link_color',
            'priority' => 10,
        )
        ));

    /* SETTING: LINK HOVER COLOR */
    $wp_customize->add_setting( 'underskeleton_link_hover_color', array(
        'default'   => '#10483d',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_link_hover_color',
        array(
            'label' => __( 'Link Hover Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_link_hover_color',
            'priority' => 10,
        )
        ));

    /* SETTING: BUTTON TEXT COLOR */
    $wp_customize->add_setting( 'underskeleton_button_text_color', array(
        'default'   => '#fff',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_text_color',
        array(
            'label' => __( 'Button Text Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_button_text_color',
            'priority' => 10,
        )
        ));

    /* SETTING: BUTTON HOVER TEXT COLOR */
    $wp_customize->add_setting( 'underskeleton_button_hover_text_color', array(
        'default'   => '#fff',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_hover_text_color',
        array(
            'label' => __( 'Button Hover Text Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_button_hover_text_color',
            'priority' => 10,
        )
        ));

    /* SETTING: BUTTON BACKGROUND COLOR */
    $wp_customize->add_setting( 'underskeleton_button_background_color', array(
        'default'   => '#155d4f',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_background_color',
        array(
            'label' => __( 'Button Background Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_button_background_color',
            'priority' => 10,
        )
        ));

    /* SETTING: BUTTON HOVER BACKGROUND COLOR */
    $wp_customize->add_setting( 'underskeleton_button_hover_background_color', array(
        'default'   => '#10483d',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_button_hover_background_color',
        array(
            'label' => __( 'Button Hover Background Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_button_hover_background_color',
            'priority' => 10,
        )
        ));

}
add_action('customize_register', 'underskeleton_colors_customizer');



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
        a:hover, a:focus, a:active { color: <?php echo esc_attr( get_theme_mod( 'underskeleton_link_hover_color', '#10483d' ) ); ?>; }
        /* Buttons */
        .button, button, input[type=submit], input[type=reset], input[type=button] {
            color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_text_color', '#fff' ) ); ?>;
            background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_background_color', '#155d4f' ) ); ?>;
        }
        .button:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover {
            color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_hover_text_color', '#fff' ) ); ?>;
            background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_hover_background_color', '#10483d' ) ); ?>;
        }

    </style> 
    <!--/Customizer Colors-->
    <?php
}
add_action('wp_head', 'underskeleton_colors_customizer_output');
