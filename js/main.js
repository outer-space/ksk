// Fire when jQuery is ready:
$( function() {

	/*	
	 * =========================
	 *		Sliding Up/Down	
	 * =========================
	 */ 

	var top, up;
	$('footer li').live( 'click', function() {
		

		$('.slideup').children().hide();

		var item = $(this).index();

		if ( up == item ) {
			if ( parseInt($('.slideup').css('top'), 10) == 0 ) {
				top = '100%';	
			} else {
				top = '0%';
			}		
			$('.slideup').animate({
				top:top
			}); 
			$('.slideup').children().eq(item).show();

		} else {
			$('.slideup').animate({
				top: '100%'
			}, function() {
				$('.slideup').animate({
					top:'0%'
				})
				$('.slideup').children().eq(item).show();
			});

		}
		
		up = item;


	
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

	 }, 90000);


	 /*	
	 * =========================
	 *		Main Imange resize
	 * =========================
	 */ 

	 $(window).resize( function(){

	 });

});
