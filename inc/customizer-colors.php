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
        'default'       => '#155d4f',
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

    /* SETTING: BUTTON BACKGROUND COLOR */
    $wp_customize->add_setting( 'underskeleton_button_background_color', array(
        'default'       => '#f3f3f3',
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

}
add_action('customize_register', 'underskeleton_colors_customizer');





/*------------------------------------*\
  #BUTTON VARIANT CSS RENDER
\*------------------------------------*/
function underskeleton_button_variant_css_render($variant_name, $args = array()) {
    ?>
    .button.button-<?php echo esc_attr($variant_name); ?>,
    button.button-<?php echo esc_attr($variant_name); ?>,
    input[type="submit"].button-<?php echo esc_attr($variant_name); ?>,
    input[type="reset"].button-<?php echo esc_attr($variant_name); ?>,
    input[type="button"].button-<?php echo esc_attr($variant_name); ?> {
      <?php echo !empty($args['color']) ? esc_attr( 'color: ' . $args['color'] . ';' ) : ''; ?>
      <?php echo !empty($args['background_color']) ? esc_attr( 'background-color: ' . $args['background_color'] . ';' ) : ''; ?>
      <?php echo !empty($args['border_color']) ? esc_attr( 'border-color: ' . $args['border_color'] . ';' ) : esc_attr( 'border-color: ' . $args['background_color'] . ';' ); ?>
    }
    .button.button-<?php echo esc_attr($variant_name); ?>:hover,
    button.button-<?php echo esc_attr($variant_name); ?>:hover,
    input[type="submit"].button-<?php echo esc_attr($variant_name); ?>:hover,
    input[type="reset"].button-<?php echo esc_attr($variant_name); ?>:hover,
    input[type="button"].button-<?php echo esc_attr($variant_name); ?>:hover,
    .button.button-<?php echo esc_attr($variant_name); ?>:focus,
    button.button-<?php echo esc_attr($variant_name); ?>:focus,
    input[type="submit"].button-<?php echo esc_attr($variant_name); ?>:focus,
    input[type="reset"].button-<?php echo esc_attr($variant_name); ?>:focus,
    input[type="button"].button-<?php echo esc_attr($variant_name); ?>:focus,
    .button.button-<?php echo esc_attr($variant_name); ?>:active,
    button.button-<?php echo esc_attr($variant_name); ?>:active,
    input[type="submit"].button-<?php echo esc_attr($variant_name); ?>:active,
    input[type="reset"].button-<?php echo esc_attr($variant_name); ?>:active,
    input[type="button"].button-<?php echo esc_attr($variant_name); ?>:active {
      <?php echo !empty($args['hover_color']) ? esc_attr( 'color: ' . $args['hover_color'] . ';' ) : ''; ?>
      <?php echo !empty($args['hover_background_color']) ? esc_attr( 'background-color: ' . $args['hover_background_color'] . ';' ) : ''; ?>
      <?php echo !empty($args['hover_border_color']) ? esc_attr( 'border-color: ' . $args['hover_border_color'] . ';' ) : esc_attr( 'border-color: ' . $args['hover_background_color'] . ';' ); ?>
    }
    
    <?php
}




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
        a:hover, a:focus, a:active { color: <?php echo esc_attr( underskeleton_adjust_brightness( get_theme_mod( 'underskeleton_link_color', '#155d4f' ), -25 ) . (is_customize_preview() ? ' !important' : '') ); ?>; }
        /* Default Buttons */
        .button, button, input[type=submit], input[type=reset], input[type=button] {
            color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_text_color', '#155d4f' ) ); ?>;
            background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_background_color', '#f3f3f3' ) ); ?>;
        }
        .button:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover,
        .button:focus, button:focus, input[type=submit]:focus, input[type=reset]:focus, input[type=button]:focus,
        .button:active, button:active, input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
            color: <?php echo esc_attr( get_theme_mod( 'underskeleton_button_text_color', '#155d4f' ) ); ?>;
            background-color: <?php echo esc_attr( underskeleton_adjust_brightness( get_theme_mod( 'underskeleton_button_background_color', '#f3f3f3' ), -25) . (is_customize_preview() ? ' !important' : '') ); ?>;
        }
        /* Color Modifiers */
        .primary-background { background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_primary_color', '#d72d5c' ) ); ?>; }
        .secondary-background { background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_secondary_color', '#155d4f' ) ); ?>; }
        .tertiary-background { background-color: <?php echo esc_attr( get_theme_mod( 'underskeleton_tertiary_color', '#264a5c' ) ); ?>; }

        <?php
            /* RENDER BUTTON VARIANTS */

            underskeleton_button_variant_css_render(
                'primary',
                array(
                    'color'                     => '#fff',
                    'background_color'          => get_theme_mod( 'underskeleton_primary_color', '#d72d5c' ) ,
                    'border_color'              => '',
                    'hover_color'               => '#fff',
                    'hover_background_color'    => underskeleton_adjust_brightness(get_theme_mod( 'underskeleton_primary_color', '#d72d5c' ), -25) . (is_customize_preview() ? ' !important' : ''),
                    'hover_border_color'        => '',
                ));

            underskeleton_button_variant_css_render(
                'secondary',
                array(
                    'color'                     => '#fff',
                    'background_color'          => get_theme_mod( 'underskeleton_secondary_color', '#155d4f' ),
                    'border_color'              => '',
                    'hover_color'               => '#fff',
                    'hover_background_color'    => underskeleton_adjust_brightness(get_theme_mod( 'underskeleton_secondary_color', '#155d4f' ), -25) . (is_customize_preview() ? ' !important' : ''),
                    'hover_border_color'        => '',
                ));

            underskeleton_button_variant_css_render(
                'tertiary',
                array(
                    'color'                     => '#fff',
                    'background_color'          => get_theme_mod( 'underskeleton_tertiary_color', '#264a5c' ),
                    'border_color'              => '',
                    'hover_color'               => '#fff',
                    'hover_background_color'    => underskeleton_adjust_brightness(get_theme_mod( 'underskeleton_tertiary_color', '#264a5c' ), -25) . (is_customize_preview() ? ' !important' : ''),
                    'hover_border_color'        => '',
                ));
        ?>
    </style> 
    <!--/Customizer Colors-->
    <?php
}
add_action('wp_head', 'underskeleton_colors_customizer_output');
