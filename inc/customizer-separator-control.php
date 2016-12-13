<?php

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function underskeleton_separator_customize_register( $wp_customize ) {

  class Underskeleton_Customize_Separator_Control extends WP_Customize_Control {
    public $type = 'sepatator_control';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <h2><?php echo esc_html( $this->label ); ?></h2>
    <?php
    }
  }

}
add_action( 'customize_register', 'underskeleton_separator_customize_register' );
