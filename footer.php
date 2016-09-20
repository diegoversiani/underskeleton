<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnderSkeleton
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-footer__content <?php echo get_theme_mod( 'underskeleton_footer_container_class', true ) ? 'container' : '' ?>">
    <div class="row">

  		<div class="site-info">
  			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underskeleton' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underskeleton' ), 'WordPress' ); ?></a>
  			<span class="sep"> | </span>
  			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underskeleton' ), __( 'Underskeleton' , 'underskeleton'), __( '<a href="http://getunderskeleton.com" rel="designer">getunderskeleton.com</a>' , 'underskeleton') ); ?>
  		</div><!-- .site-info -->

    </div><!-- .row -->
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
