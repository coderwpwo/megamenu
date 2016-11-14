jQuery(document).ready(function() {
	var stickyNavTop = jQuery('.fixed_nav').offset().top;
	var stickyNav = function(){
	var scrollTop = jQuery(window).scrollTop();
		if (scrollTop > stickyNavTop) { 
			jQuery('.fixed_nav').addClass('sticky');
		} else {
			jQuery('.fixed_nav').removeClass('sticky'); 
		}
		};
	
	stickyNav();
	jQuery(window).scroll(function() {
		stickyNav();
	});
});