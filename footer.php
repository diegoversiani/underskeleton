<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underskeleton
 */

?>

	</div><!-- #content -->


  <footer id="colophon" class="site-footer" role="contentinfo">
    <?php $container_class = get_theme_mod( 'underskeleton_footer_container_class', true ) ? 'container' : '' ?>
    <div class="site-footer__content <?php echo esc_attr( $container_class ); ?>">
    <div class="row">

    footer

    </div><!-- .row -->
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
