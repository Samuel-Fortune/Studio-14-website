window.onload = function() {
	// code to execute when the webpage has finished loading

	$( '#click' ).click(function( e ) {
		e.preventDefault();
		$('#mobile-list-menu').addClass('mobile-list-menu');
	} );

	$( '#click' ).click(function( e ) {
		e.preventDefault();
		$('#mobile-list-menu').removeClass('mobile-list');
	} );
};
