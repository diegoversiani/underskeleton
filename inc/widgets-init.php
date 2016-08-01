<?php
/**
 * UnderSkeleton Widget Areas Initializations.
 *
 * @package UnderSkeleton
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underskeleton_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'underskeleton' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'underskeleton' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'underskeleton_widgets_init' );




/*------------------------------------*\
  #HOMEPAGE WIDGET AREAS
\*------------------------------------*/

function underskeleton_homepage_widgets_init () {

  /* #HOMEPAGE BEFORE CONTENT */
    
  register_sidebar( array(
    'name'          => __( 'Homepage Before Content', 'underskeleton' ),
    'id'            => 'underskeleton_homepage_before',
    'description'   => 'Insert widgets before the content of the page set as the homepage.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );


  /* #HOMEPAGE AFTER CONTENT */

  register_sidebar( array(
    'name'          => __( 'Homepage After Content', 'underskeleton' ),
    'id'            => 'underskeleton_homepage_after',
    'description'   => 'Insert widgets after the content of the page set as the homepage.',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

}
add_action( 'widgets_init', 'underskeleton_homepage_widgets_init', 0);