$(document).ready(function () {
	// code to execute when the webpage has finished loading

	$( '#click' ).click(function( e ) {
		e.preventDefault();
		$('#mobile-list-menu').toggleClass('mobile-list-menu');
		$('mobile-list-menu').fadeIn();
		$('#click').toggleClass('active');
	} );

	$(window).resize(function() {
		if ($(window).width() > 768) {
			location.reload();
		}
	});

});
