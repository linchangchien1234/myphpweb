jQuery(document).ready(function($) {
	a1 = $('.navMenuAll #mobileNav .navMenu11 li:nth-of-type(1)');
	a2 = $('.navMenuAll #mobileNav .navMenu11 li:nth-of-type(2)');
	a3 = $('.navMenuAll #mobileNav .navMenu11 li:nth-of-type(3)');
	$('.navMenuAll #mobileNav .navMenu11 li:nth-of-type(1)').on('click', function() {
		a1.addClass('active');
		a2.removeClass('active');
		a3.removeClass('active');
		
	});
	a2.on('click', function() {
		a1.removeClass('active');
		a2.addClass('active');
		a3.removeClass('active');		
	});
	a3.on('click', function() {
		a1.removeClass('active');
		a2.removeClass('active');
		a3.addClass('active');
		
	});
});


