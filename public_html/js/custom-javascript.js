$(document).ready(function(){

	/********************************************
	 * All credit for this Javascript goes to Rochelle Lewis the teflon don
	 * Navbar Class Swap
	 * @author rlewis37@cnm.edu
	 *
	 * These functions require the jQuery library.
	 *
	 * On document load, these functions check the
	 * <body> tag for a class that indicates the
	 * layout type: either home-layout or content-layout.
	 *
	 * Then, applies the appropriate Bootstrap navbar
	 * style class is added depending on the layout.
	 *
	 * On the Home Page, the navbar will change
	 * colors on scroll.
	 *
	 ********************************************/

	/* check <body> tag for the home-layout class, and add navbar-INVERSE class */
	if($('body').hasClass('home-layout')) {

		$('.navbar').addClass('navbar-inverse');

		/* on home page, swap out navabar classes if user scrolls down 50 px */
		$(window).on('scroll', function() {

			if($(window).scrollTop() > 250) {
				$('.navbar').addClass('navbar-default').removeClass('navbar-inverse');
			}

			/* when user scrolls back up, reset navbar*/
			if($(window).scrollTop() <= 250) {
				$('.navbar').addClass('navbar-inverse').removeClass('navbar-default');
			}

		});
	}

});