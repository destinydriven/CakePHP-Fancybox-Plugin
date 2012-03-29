$(document).ready(function() {

	/* This is basic - uses default settings */	
	
	$('.fancybox1').fancybox({
		'hideOnContentClick': true,
	});	
	
	
	/* Using buttons */

	$('.fancybox2').fancybox({
		'hideOnContentClick': true,
		helpers		: { 
			title	: { type : 'outside' },
			buttons	: {}
		}
	});	
	
	
	$('.fancybox3').fancybox({
		'hideOnContentClick': true,
	});	
	
	/* Using thumbnails*/

	 $('.fancybox4').fancybox({
		'hideOnContentClick': true,
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'inside'
			},
			overlay	: {
				opacity : 0.8,
				css : {
					'background-color' : '#000'
				}
			},
			thumbs	: {
				width	: 50,
				height	: 50
			},
			buttons	: {}
		}

	});
	
	
	$('.fancybox5').fancybox({
		'hideOnContentClick': true,
	});	
	
	$('.fancybox6')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
	 });
	 
	 $('.fancybox7')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',
					
					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
	 });
	 
	 
	 $('.fancybox8')
				//.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
	 });
	 
	 $('.fancybox9')
				//.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
	 });
	
	/* Apply fancybox to multiple items */
	
	/*
	$(".fancybox").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	false
		});*/
	
});