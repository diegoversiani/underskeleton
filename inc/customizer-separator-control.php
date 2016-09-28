<?php

class WP_Separator_Customize_Control extends WP_Customize_Control {
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
