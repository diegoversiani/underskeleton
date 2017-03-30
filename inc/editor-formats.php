<?php
/**
 * Setup editor custom formats.
 *
 * @package underskeleton
 */

/*
* Enable Editor Formats drop-down
*/
function underskeleton_mce_buttons_2( $buttons ) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}
add_filter('mce_buttons_2', 'underskeleton_mce_buttons_2');



/*
* Callback function to filter the MCE settings
*/
function underskeleton_mce_before_init_insert_formats( $init_array ) {  
  // Define the style_formats array
  $style_formats = array(
    /*
    * Each array child is a format with it's own settings
    * Notice that each array has title, block or inline, classes, styles and wrapper arguments
    * Title is the label which will be visible in Formats menu
    * Block defines whether it is a span, div, selector, or inline style
    * Inline defines which element will be used to wrap the inline styles
    * Classes allows you to define CSS classes to be used
    * Styles allows you to define inline css properties to be used
    * Wrapper whether or not to add a new block-level element around any selected elements
    * Items allows you create a tree of options
    * 
    * To learn more visit http://getunderskeleton[dot]com/features/editor-formats
    */
    array(
      'title' => __('Layout', 'underskeleton'),
      'items' => array (

        array(
          'title' => __('Columns', 'underskeleton'),
          'items' => array (
            array(
              'title' => __('Row', 'underskeleton'),
              'block' => 'div',
              'classes' => 'row',
              'wrapper' => true,
            ),
            array(
              'title' => __('Block of 1/2', 'underskeleton'),
              'block' => 'div',
              'classes' => 'six columns',
              'wrapper' => true,
            ),
            array(
              'title' => __('Block of 1/3', 'underskeleton'),
              'block' => 'div',
              'classes' => 'four columns',
              'wrapper' => true,
            ),
            array(
              'title' => __('Block of 2/3', 'underskeleton'),
              'block' => 'div',
              'classes' => 'eight columns',
              'wrapper' => true,
            ),
            array(
              'title' => __('Content Container', 'underskeleton'),
              'block' => 'div',
              'classes' => 'container',
              'wrapper' => true,
            ),
          ),
        ),

        array(
          'title' => __('Text Columns', 'underskeleton'),
          'items' => array (
            array(
              'title' => __('Text in 2 Columns', 'underskeleton'),
              'block' => 'div',
              'classes' => 'text-two-columns',
              'wrapper' => false,
            ),
            array(
              'title' => __('Text in 3 Columns', 'underskeleton'),
              'block' => 'div',
              'classes' => 'text-three-columns',
              'wrapper' => false,
            ),
            array(
              'title' => __('Text in 4 Columns', 'underskeleton'),
              'block' => 'div',
              'classes' => 'text-four-columns',
              'wrapper' => false,
            ),
          ),
        ),
      ),
    ),

    array(
      'title' => __('Color Blocks', 'underskeleton'),
      'items' => array (
        array(
          'title' => __('Light Grey Block', 'underskeleton'),
          'block' => 'div',
          'classes' => 'light-grey-background block-spacing',
          'wrapper' => true,
        ),
        array(
          'title' => __('Dark Grey Block', 'underskeleton'),
          'block' => 'div',
          'classes' => 'dark-grey-background block-spacing',
          'wrapper' => true,
        ),
        array(
          'title' => __('Primary Color', 'underskeleton'),
          'block' => 'div',
          'classes' => 'primary-background block-spacing',
          'wrapper' => true,
        ),
        array(
          'title' => __('Secondary Color', 'underskeleton'),
          'block' => 'div',
          'classes' => 'secondary-background block-spacing',
          'wrapper' => true,
        ),
        array(
          'title' => __('Tertiary Color', 'underskeleton'),
          'block' => 'div',
          'classes' => 'tertiary-background block-spacing',
          'wrapper' => true,
        ),
      ),
    ),

    array(
      'title' => __('Buttons', 'underskeleton'),
      'items' => array (
        array(
          'title' => __('Default Color', 'underskeleton'),
          'inline' => 'a',
          'classes' => 'button',
        ),
        array(
          'title' => __('Primary Color', 'underskeleton'),
          'inline' => 'a',
          'classes' => 'button button-primary',
        ),
        array(
          'title' => __('Secondary Color', 'underskeleton'),
          'inline' => 'a',
          'classes' => 'button button-secondary',
        ),
        array(
          'title' => __('Tertiary Color', 'underskeleton'),
          'inline' => 'a',
          'classes' => 'button button-tertiary',
        ),
        array(
          'title' => __('Medium Size', 'underskeleton'),
          'inline' => 'a',
          'classes' => 'button secondary-background',
        ),
        array(
          'title' => __('Large Size', 'underskeleton'),
          'inline' => 'a',
          'classes' => 'button tertiary-background',
        ),
      ),
    ),
  );

  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );

  return $init_array;
}
add_filter( 'tiny_mce_before_init', 'underskeleton_mce_before_init_insert_formats' );
