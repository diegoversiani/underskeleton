/**
 * File customizer-colors.js.
 *
 * Theme Colors Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Colors Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Text color
	wp.customize( 'underskeleton_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( { 'color': to } );
		} );
	} );
	
} )( jQuery );
