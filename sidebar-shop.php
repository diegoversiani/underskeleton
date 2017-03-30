<?php
/**
 * The sidebar containing the shop widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underskeleton
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
  return;
}
?>

<aside id="secondary" class="widget-area sidebar-shop three columns" role="complementary">
  <?php dynamic_sidebar( 'sidebar-shop' ); ?>
</aside><!-- #secondary -->
