<?php
/**
 * Template Name: Homepage (DEPRECATED)
 *
 * Template for displaying the homepage.
 *
 * @package underskeleton
 */

get_header(); ?>

<?php
  if ( is_active_sidebar( 'underskeleton_homepage_before' ) ) {
    dynamic_sidebar( 'underskeleton_homepage_before' );
  }
?>

<?php if ( !is_front_page() || get_theme_mod( 'underskeleton_show_homepage_content', true ) ) : ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'homepage' );

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php endif; ?>

<?php
  if ( is_active_sidebar( 'underskeleton_homepage_after' ) ) {
    dynamic_sidebar( 'underskeleton_homepage_after' );
  }
?>

<?php get_footer(); ?>