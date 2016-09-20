<?php
/**
 * underskeleton Widget Areas Initializations.
 *
 * @package underskeleton
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
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'underskeleton_widgets_init' );





/*------------------------------------*\
  #HOMEPAGE WIDGET AREAS
\*------------------------------------*/

function underskeleton_homepage_widgets_init() {

  /* #HOMEPAGE BEFORE CONTENT */
    
  register_sidebar( array(
    'name'          => __( 'Homepage Before Content', 'underskeleton' ),
    'id'            => 'underskeleton_homepage_before',
    'description'   => 'Insert widgets before the content of the page set as the homepage.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );


  /* #HOMEPAGE AFTER CONTENT */

  register_sidebar( array(
    'name'          => __( 'Homepage After Content', 'underskeleton' ),
    'id'            => 'underskeleton_homepage_after',
    'description'   => 'Insert widgets after the content of the page set as the homepage.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'underskeleton_homepage_widgets_init', 0);





/*------------------------------------*\
  #POSTS LISTS WIDGET AREAS
\*------------------------------------*/

function underskeleton_posts_lists_widgets_init() {

  register_sidebar( array(
    'name'          => __( 'Posts Lists', 'underskeleton' ),
    'id'            => 'underskeleton_posts_lists',
    'description'   => 'Widgets here will appear after posts lists such as the front-page posts list and archives.',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'underskeleton_posts_lists_widgets_init', 0);





/*------------------------------------*\
  #FOOTER WIDGET AREAS
\*------------------------------------*/

function underskeleton_footer_widgets_init() {

  /* #FOOTER WIDGETS 1 COLUMN */
    
  register_sidebar( array(
    'name'          => __( 'Footer Single', 'underskeleton' ),
    'id'            => 'underskeleton_footer_single',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );


  /* #FOOTER WIDGETS 3 COLUMNS */

  register_sidebar( array(
    'name'          => __( 'Footer Left', 'underskeleton' ),
    'id'            => 'underskeleton_footer_left',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Center', 'underskeleton' ),
    'id'            => 'underskeleton_footer_center',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Right', 'underskeleton' ),
    'id'            => 'underskeleton_footer_right',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'underskeleton_footer_widgets_init', 1000);