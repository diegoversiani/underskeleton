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

    /* SEPARATOR: Brand Colors */
    $wp_customize->add_setting( 'underskeleton_brand_colors_separator', array(
        'type'          => 'theme_mod',
        'capability'    => 'edit_theme_options',
        'sanitize_callback'    => 'sanitize_text_field',
        ));
    $wp_customize->add_control( new Underskeleton_Customize_Separator_Control( 
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
        'default'       => '#f4da7a',
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
        'sanitize_callback'    => 'sanitize_text_field',
        ));
    $wp_customize->add_control( new Underskeleton_Customize_Separator_Control( 
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
        'default'       => '#222222',
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
        'sanitize_callback'    => 'sanitize_text_field',
        ));
    $wp_customize->add_control( new Underskeleton_Customize_Separator_Control( 
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
function underskeleton_colors_customizer_get_output() {

    // Start output buffering
    ob_start();

    $text_color_esc = esc_attr( get_theme_mod( 'underskeleton_text_color', '#222222' ) );
    $link_color_esc = esc_attr( get_theme_mod( 'underskeleton_link_color', '#155d4f' ) );
    $heading_color_esc = esc_attr( get_theme_mod( 'underskeleton_heading_color', '#d72d5c' ) );
    $header_background_color_esc = esc_attr( get_theme_mod( 'underskeleton_header_background_color', '#bbc2ca' ) );
    $button_text_color_esc = esc_attr( get_theme_mod( 'underskeleton_button_text_color', '#155d4f' ) ); 
    $button_background_color_esc = esc_attr( get_theme_mod( 'underskeleton_button_background_color', '#f3f3f3' ) ); 
    
    $primary_color_esc = esc_attr( get_theme_mod( 'underskeleton_primary_color', '#d72d5c' ) ); 
    $secondary_color_esc = esc_attr( get_theme_mod( 'underskeleton_secondary_color', '#155d4f' ) ); 
    $tertiary_color_esc = esc_attr( get_theme_mod( 'underskeleton_tertiary_color', '#f4da7a' ) ); 
    
    ?>
        /* default text color */
        body { color: <?php echo $text_color_esc; ?>; }
        /* Headings */
        h1, h2, h3, h4, h5, h6 { color: <?php echo $heading_color_esc; ?>; }
        /* Links */
        a { color: <?php echo $link_color_esc; ?>; }
        a:hover, a:focus, a:active { color: <?php echo esc_attr( underskeleton_adjust_brightness( $link_color_esc, -25 ) . (is_customize_preview() ? ' !important' : '') ); ?>; }
        /* Default Buttons */
        .button, button, input[type=submit], input[type=reset], input[type=button] {
            color: <?php echo $button_text_color_esc; ?>;
            background-color: <?php echo $button_background_color_esc; ?>;
        }
        .button:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover,
        .button:focus, button:focus, input[type=submit]:focus, input[type=reset]:focus, input[type=button]:focus,
        .button:active, button:active, input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
            color: <?php echo $button_text_color_esc; ?>;
            background-color: <?php echo esc_attr( underskeleton_adjust_brightness( $button_background_color_esc, -25) . (is_customize_preview() ? ' !important' : '') ); ?>;
        }
        /* Color Modifiers */
        .primary-background { background-color: <?php echo $primary_color_esc; ?>; }
        .secondary-background { background-color: <?php echo $secondary_color_esc; ?>; }
        .tertiary-background { background-color: <?php echo $tertiary_color_esc; ?>; }

        <?php
            /* RENDER BUTTON VARIANTS */

            underskeleton_button_variant_css_render(
                'primary',
                array(
                    'color'                     => '#ffffff',
                    'background_color'          => $primary_color_esc,
                    'border_color'              => '',
                    'hover_color'               => '#ffffff',
                    'hover_background_color'    => underskeleton_adjust_brightness( $primary_color_esc, -25 ) . (is_customize_preview() ? ' !important' : ''),
                    'hover_border_color'        => '',
                ));

            underskeleton_button_variant_css_render(
                'secondary',
                array(
                    'color'                     => '#ffffff',
                    'background_color'          => $secondary_color_esc,
                    'border_color'              => '',
                    'hover_color'               => '#ffffff',
                    'hover_background_color'    => underskeleton_adjust_brightness( $secondary_color_esc, -25 ) . (is_customize_preview() ? ' !important' : ''),
                    'hover_border_color'        => '',
                ));

            underskeleton_button_variant_css_render(
                'tertiary',
                array(
                    'color'                     => '#ffffff',
                    'background_color'          => $tertiary_color_esc,
                    'border_color'              => '',
                    'hover_color'               => '#ffffff',
                    'hover_background_color'    => underskeleton_adjust_brightness( $tertiary_color_esc, -25 ) . (is_customize_preview() ? ' !important' : ''),
                    'hover_border_color'        => '',
                ));
        ?>
    <?php

    // Release output buffering
    return ob_get_clean();
}

/* Front-end custom styles */
function underskeleton_colors_customizer_wp_head() {
    echo '<style type="text/css">' . underskeleton_colors_customizer_get_output() . '</style>';
}
add_action('wp_head', 'underskeleton_colors_customizer_wp_head', 20);
