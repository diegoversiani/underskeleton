<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underskeleton
 */

get_header(); ?>

<div class="row">

	<div id="primary" class="content-area nine columns">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content' );

			the_post_navigation(array(
        'prev_text'	=> __( '&laquo; %title', 'underskeleton' ),
        'next_text' => __( '%title &raquo;', 'underskeleton' ),
        ));

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
?>

</div> <!-- .row -->

<?php
get_footer();
