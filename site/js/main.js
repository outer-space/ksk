// Fire when jQuery is ready:
$( function() {

	/*	
	 * =========================
	 *		Sliding Up/Down	
	 * =========================
	 */ 
	var className;
	$('footer li').live( 'click', function() {
		var currentTop = parseInt( $('.slideup').css('top'), 10),
				mainHeight = $('.main').height(),
				thisClass = $(this).attr('class');

		$('.slideup img').hide();

		if ( thisClass == className || className == undefined ) {
			// If the classes are the same (or there's no className),
			// toggle up/down
			var top;
			if ( currentTop == mainHeight ) {
				top = '0%';
				className = thisClass;
			} else {
				top = '100%';
				className = undefined;
			}
			var top = currentTop == mainHeight ? '0%' : '100%';

			$('img[src="img/' + thisClass + '.png"]').show();

			$('.slideup').animate({
				top: top
			});
		} else {
			// If the classes are different, just show the image from thisClass
			$('img[src="img/' + thisClass + '.png"]').show();
			className = thisClass;
		}
	});


	/*	
	 * =========================
	 *		Image Slider
	 * =========================
	 */ 
	
	 setInterval( function() {

		$('.images img').eq(0).animate({
			left: '-100%'
		}, function() {
			$(this).appendTo('.images').css('left', '100%');
		});

		$('.images img').eq(1).animate({
			left: '0%'
		});

	 }, 2000);




});
