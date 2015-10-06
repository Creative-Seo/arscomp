$(document).ready(function() {

	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {
			title	: {type: 'outside'},
			thumbs	: {width: 50,height: 50}
		}
	});
	
	$("#owl-slider").owlCarousel({
		items:1,
		loop:true,
   		autoplay:true,
    	autoplayTimeout:3000,
   		autoplayHoverPause:true
   	});
	$("#owl-news").owlCarousel({
		items:5,
		loop:true,
    	margin:30,
   		autoplay:true,
    	autoplayTimeout:2,
   		autoplayHoverPause:true,
   		autoplaySpeed: 2000
   	});
	$("#owl-partneri").owlCarousel({
		items:5,
		loop:true,
    	margin:10,
   		autoplay:true,
    	autoplayTimeout:2,
   		autoplayHoverPause:true,
   		autoplaySpeed: 2000
   	});

});