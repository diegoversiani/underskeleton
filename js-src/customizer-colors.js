/**
 * File customizer-colors.js.
 *
 * Theme Colors Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Colors Customizer preview reload changes asynchronously.
 */

( function( $ ) {
  var handleHoverStyles;

  handleHoverStyles = function(style_id, selector, property, value ){
    var style, el;

    style = '<style class="' + style_id + '">' + selector + ' { ' + property + ': ' + value + ' !important; }</style>'; // build the style element
    el = $( '.' + style_id ); // look for a matching style element that might already be there

    if ( el.length ) {
      el.replaceWith( style ); // style element already exists, so replace it
    } else {
      $( 'head' ).append( style ); // style element doesn't exist so add it
    }
  };


  // Primary color
  wp.customize( 'underskeleton_primary_color', function( value ) {
    value.bind( function( to ) {
      $( '.primary-background' ).css( { 'background-color': to } );
    } );
  } );

  // Secondary color
  wp.customize( 'underskeleton_secondary_color', function( value ) {
    value.bind( function( to ) {
      $( '.secondary-background' ).css( { 'background-color': to } );
    } );
  } );

  // Tertiary color
  wp.customize( 'underskeleton_tertiary_color', function( value ) {
    value.bind( function( to ) {
      $( '.tertiary-background' ).css( { 'background-color': to } );
    } );
  } );

	// Text color
	wp.customize( 'underskeleton_text_color', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( { 'color': to } );
		} );
	} );

  // Heading color
  wp.customize( 'underskeleton_heading_color', function( value ) {
    value.bind( function( to ) {
      $( 'h1, h2, h3, h4, h5, h6' ).css( { 'color': to } );
    } );
  } );

  // Links color
  wp.customize( 'underskeleton_link_color', function( value ) {
    value.bind( function( to ) {
      $( 'a' ).css( { 'color': to } );
    } );
  } );

  // Links Hover color
  wp.customize( 'underskeleton_link_hover_color', function( value ) {
    value.bind( function( to ) {
      handleHoverStyles('link-hover-styles', 'a:hover, a:focus, a:active', 'color', to);
    } );
  } );

  // Button Text color
  wp.customize( 'underskeleton_button_text_color', function( value ) {
    value.bind( function( to ) {
      $( '.button, button, input[type=submit], input[type=reset], input[type=button]' ).css( { 'color': to } );
    } );
  } );

  // Button Background color
  wp.customize( 'underskeleton_button_background_color', function( value ) {
    value.bind( function( to ) {
      $( '.button, button, input[type=submit], input[type=reset], input[type=button]' ).css( { 'background-color': to } );
    } );
  } );

  // Button Hover Text color
  wp.customize( 'underskeleton_button_hover_text_color', function( value ) {
    value.bind( function( to ) {
      handleHoverStyles('button-hover-text-styles', '.button:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover', 'color', to);
    } );
  } );

  // Button Hover Background color
  wp.customize( 'underskeleton_button_hover_background_color', function( value ) {
    value.bind( function( to ) {
      handleHoverStyles('button-hover-background-styles', '.button:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover', 'background-color', to);
    } );
  } );
	
} )( jQuery );
