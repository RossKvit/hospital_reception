$(function(){
	$('#home_slider').slick({
		dots: false,
		nextArrow: '.next_but',
  		prevArrow: '.prev_but',
	});


	if( $('body').height() <  $(window).height()){

		$('footer').css({
			'position':'fixed',
			'bottom':0,
			'left': '-585',
			'margin':'0 auto',
			'width':'1140',
		});

	}
})

