window.onload = function() {
	// code to execute when the webpage has finished loading

	$( '#click' ).click(function( e ) {
		e.preventDefault();
		$('#mobile-list-menu').toggle('');
		$('nav').css('align-items', 'flex-start');
		$('#mobile-list-menu').css({
			'display': 'flex',
			'width': '500px',
			'height': '1000px',
			'overflow': 'hidden',
			'background-color': 'red',
			'justify-content': 'center'
		});
		$('.mobile-menu nav-menu').css({
			'display': 'flex',
			'flex-direction': 'column',
			'margin': 'auto',
			'height': '400px',
			'justify-content': 'space-between'
		});
	} );

	$(window).resize(function() {
		if ($(window).width() > 768) {
			location.reload();
		}
	});
};
