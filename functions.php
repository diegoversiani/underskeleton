<?php
/**
 * Underskeleton functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underskeleton
 */

/**
 * Load utilities, globally available functions.
 */
require get_template_directory() . '/inc/utilities.php';

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
 * Set editor styles select.
 */
require get_template_directory() . '/inc/editor-formats.php';

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
