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
    'name'          => __( 'Sidebar', 'underskeleton' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here.', 'underskeleton' ),
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
    'name'          => __( 'Homepage Before Content (DEPRECATED)', 'underskeleton' ),
    'id'            => 'underskeleton_homepage_before',
    'description'   => __( 'Insert widgets before the content in the homepage template.', 'underskeleton' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );


  /* #HOMEPAGE AFTER CONTENT */

  register_sidebar( array(
    'name'          => __( 'Homepage After Content (DEPRECATED)', 'underskeleton' ),
    'id'            => 'underskeleton_homepage_after',
    'description'   => __( 'Insert widgets after the content in the homepage template.', 'underskeleton' ),
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
    'name'          => __( 'Posts Lists (DEPRECATED)', 'underskeleton' ),
    'id'            => 'underskeleton_posts_lists',
    'description'   => __( 'Insert widgets after posts lists such as the blog page and archives.', 'underskeleton' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'underskeleton_posts_lists_widgets_init', 0);



/*------------------------------------*\
  #SHOP WIDGET AREAS
\*------------------------------------*/
function underskeleton_shop_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Shop Sidebar', 'underskeleton' ),
    'id'            => 'sidebar-shop',
    'description'   => __( 'Add widgets to shop sidebar here.', 'underskeleton' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'underskeleton_shop_widgets_init' );



/*------------------------------------*\
  #FOOTER WIDGET AREAS
\*------------------------------------*/
function underskeleton_footer_widgets_init() {

  /* #FOOTER WIDGETS 1 COLUMN */
  register_sidebar( array(
    'name'          => __( 'Footer Single', 'underskeleton' ),
    'id'            => 'underskeleton_footer_single',
    'description'   => __( 'Widgets for one column footer.', 'underskeleton' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );


  /* #FOOTER WIDGETS 3 COLUMNS */
  register_sidebar( array(
    'name'          => __( 'Footer Left', 'underskeleton' ),
    'id'            => 'underskeleton_footer_left',
    'description'   => __( 'Widgets for left column on three columns footer.', 'underskeleton' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Center', 'underskeleton' ),
    'id'            => 'underskeleton_footer_center',
    'description'   => __( 'Widgets for center column on three columns footer.', 'underskeleton' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Right', 'underskeleton' ),
    'id'            => 'underskeleton_footer_right',
    'description'   => __( 'Widgets for right column on three columns footer.', 'underskeleton' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'underskeleton_footer_widgets_init', 1000);
