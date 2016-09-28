/**
 * File customizer-colors.js.
 *
 * Theme Colors Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Colors Customizer preview reload changes asynchronously.
 */

( function( $ ) {
  var handleHoverStyles, adjustBrightness;

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

  adjustBrightness = function adjustBrightness(color, steps) {
    var usePound = false;

    if (color[0] == "#") {
      color = color.slice(1);
      usePound = true;
    }

    var R = parseInt(color.substring(0,2),16);
    var G = parseInt(color.substring(2,4),16);
    var B = parseInt(color.substring(4,6),16);

    R = R + steps;
    G = G + steps;
    B = B + steps;

    if (R > 255) R = 255;
    else if (R < 0) R = 0;

    if (G > 255) G = 255;
    else if (G < 0) G = 0;

    if (B > 255) B = 255;
    else if (B < 0) B = 0;

    var RR = ((R.toString(16).length==1)?"0"+R.toString(16):R.toString(16));
    var GG = ((G.toString(16).length==1)?"0"+G.toString(16):G.toString(16));
    var BB = ((B.toString(16).length==1)?"0"+B.toString(16):B.toString(16));

    return (usePound?"#":"") + RR + GG + BB;
  }


  // Primary color
  wp.customize( 'underskeleton_primary_color', function( value ) {
    value.bind( function( to ) {
      $( '.primary-background' ).css( { 'background-color': to } );

      $( '.button.button-primary, button.button-primary, input[type="submit"].button-primary, input[type="reset"].button-primary, input[type="button"].button-primary' ).css( { 'background-color': to, 'border-color': to } );

      handleHoverStyles('button-primary-hover-style', '.button.button-primary:hover, button.button-primary:hover, input[type="submit"].button-primary:hover, input[type="reset"].button-primary:hover, input[type="button"].button-primary:hover, .button.button-primary:focus, button.button-primary:focus, input[type="submit"].button-primary:focus, input[type="reset"].button-primary:focus, input[type="button"].button-primary:focus, .button.button-primary:active, button.button-primary:active, input[type="submit"].button-primary:active, input[type="reset"].button-primary:active, input[type="button"].button-primary:active', 'background-color', adjustBrightness(to, -25));
      handleHoverStyles('button-primary-hover-border-style', '.button.button-primary:hover, button.button-primary:hover, input[type="submit"].button-primary:hover, input[type="reset"].button-primary:hover, input[type="button"].button-primary:hover, .button.button-primary:focus, button.button-primary:focus, input[type="submit"].button-primary:focus, input[type="reset"].button-primary:focus, input[type="button"].button-primary:focus, .button.button-primary:active, button.button-primary:active, input[type="submit"].button-primary:active, input[type="reset"].button-primary:active, input[type="button"].button-primary:active', 'border-color', adjustBrightness(to, -25));
    } );
  } );

  // Secondary color
  wp.customize( 'underskeleton_secondary_color', function( value ) {
    value.bind( function( to ) {
      $( '.secondary-background' ).css( { 'background-color': to } );

      $( '.button.button-secondary, button.button-secondary, input[type="submit"].button-secondary, input[type="reset"].button-secondary, input[type="button"].button-secondary' ).css( { 'background-color': to, 'border-color': to } );

      handleHoverStyles('button-secondary-hover-style', '.button.button-secondary:hover, button.button-secondary:hover, input[type="submit"].button-secondary:hover, input[type="reset"].button-secondary:hover, input[type="button"].button-secondary:hover, .button.button-secondary:focus, button.button-secondary:focus, input[type="submit"].button-secondary:focus, input[type="reset"].button-secondary:focus, input[type="button"].button-secondary:focus, .button.button-secondary:active, button.button-secondary:active, input[type="submit"].button-secondary:active, input[type="reset"].button-secondary:active, input[type="button"].button-secondary:active', 'background-color', adjustBrightness(to, -25));
      handleHoverStyles('button-secondary-hover-border-style', '.button.button-secondary:hover, button.button-secondary:hover, input[type="submit"].button-secondary:hover, input[type="reset"].button-secondary:hover, input[type="button"].button-secondary:hover, .button.button-secondary:focus, button.button-secondary:focus, input[type="submit"].button-secondary:focus, input[type="reset"].button-secondary:focus, input[type="button"].button-secondary:focus, .button.button-secondary:active, button.button-secondary:active, input[type="submit"].button-secondary:active, input[type="reset"].button-secondary:active, input[type="button"].button-secondary:active', 'border-color', adjustBrightness(to, -25));
    } );
  } );

  // Tertiary color
  wp.customize( 'underskeleton_tertiary_color', function( value ) {
    value.bind( function( to ) {
      $( '.tertiary-background' ).css( { 'background-color': to } );

      $( '.button.button-tertiary, button.button-tertiary, input[type="submit"].button-tertiary, input[type="reset"].button-tertiary, input[type="button"].button-tertiary' ).css( { 'background-color': to, 'border-color': to } );

      handleHoverStyles('button-tertiary-hover-style', '.button.button-tertiary:hover, button.button-tertiary:hover, input[type="submit"].button-tertiary:hover, input[type="reset"].button-tertiary:hover, input[type="button"].button-tertiary:hover, .button.button-tertiary:focus, button.button-tertiary:focus, input[type="submit"].button-tertiary:focus, input[type="reset"].button-tertiary:focus, input[type="button"].button-tertiary:focus, .button.button-tertiary:active, button.button-tertiary:active, input[type="submit"].button-tertiary:active, input[type="reset"].button-tertiary:active, input[type="button"].button-tertiary:active', 'background-color', adjustBrightness(to, -25));
      handleHoverStyles('button-tertiary-hover-border-style', '.button.button-tertiary:hover, button.button-tertiary:hover, input[type="submit"].button-tertiary:hover, input[type="reset"].button-tertiary:hover, input[type="button"].button-tertiary:hover, .button.button-tertiary:focus, button.button-tertiary:focus, input[type="submit"].button-tertiary:focus, input[type="reset"].button-tertiary:focus, input[type="button"].button-tertiary:focus, .button.button-tertiary:active, button.button-tertiary:active, input[type="submit"].button-tertiary:active, input[type="reset"].button-tertiary:active, input[type="button"].button-tertiary:active', 'border-color', adjustBrightness(to, -25));
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
      handleHoverStyles('link-hover-style', 'a:hover, a:focus, a:active', 'color', adjustBrightness(to, -25));
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

      handleHoverStyles('button-hover-background-style', '.button:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover', 'background-color', adjustBrightness(to, -25));
    } );
  } );
	
} )( jQuery );
