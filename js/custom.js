jQuery(document).ready(function() {
	styleFixedHeader();


});

function styleFixedHeader() {
	var headerTop = jQuery('.navbar-inverse').offset().top;
	jQuery(window).scroll(function() {
		var scrollVal = jQuery(window).scrollTop();
		if (scrollVal > headerTop) {
			jQuery('.navbar-inverse').addClass('navbar-inverse-scroll').animate();
			jQuery('.in').addClass('in-black').animate();
			jQuery('.custom-brand').removeClass('logo-none').animate();
			jQuery('.white-brand').addClass('logo-none').animate();
		
		} else {
			jQuery('.navbar-inverse').removeClass('navbar-inverse-scroll').animate();
			jQuery('.in').removeClass('in-black').animate();
			jQuery('.custom-brand').addClass('logo-none').animate();
			jQuery('.white-brand').removeClass('logo-none').animate();
		
		}
	});
}

