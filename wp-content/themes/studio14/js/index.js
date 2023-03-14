$(document).ready(function () {
	// code to execute when the webpage has finished loading

	$('.handburger-container').click(function(e) {
		$(this).find('span.first').toggleClass('togglemenu');
		$(this).find('span.third').toggleClass('togglemenu_rotate');
		$(this).find('span.second').fadeToggle();
		$('#mobile-list-menu').toggleClass('mobile-list-menu');
		$(this).find('span.first').toggleClass('active');
		$(this).find('span.third').toggleClass('active');
		e.preventDefault();
		e.stopPropagation();
	});

	$(window).resize(function() {
		if ($(window).width() > 768) {
			location.reload();
		}
	});

});
