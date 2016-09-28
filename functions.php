<?php
/**
 * Underskeleton functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underskeleton
 */

/**
 * Theme Setup.
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Enqueue Scripts and Styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Widget Areas Initialization.
 */
require get_template_directory() . '/inc/widgets-areas.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer-separator-control.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer-colors.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';





/*------------------------------------*\
  #GLOBALLY AVAILABLE FUNCTIONS
\*------------------------------------*/

function underskeleton_adjust_brightness($hex, $steps) {
  // Steps should be between -255 and 255. Negative = darker, positive = lighter
  $steps = max(-255, min(255, $steps));

  // Normalize into a six character long hex string
  $hex = str_replace('#', '', $hex);
  if (strlen($hex) == 3) {
    $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
  }

  // Split into three parts: R, G and B
  $color_parts = str_split($hex, 2);
  $return = '#';

  foreach ($color_parts as $color) {
    $color   = hexdec($color); // Convert to decimal
    $color   = max(0,min(255,$color + $steps)); // Adjust color
    $return .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
  }

  return $return;
}