
$(document).ready(function(){


	$('[data-behaviour~=videos-slick]').each( function(){

		var $el = $( this );

		$el.slick({
			slidesToShow		: $el.data('items'),
			slidesToScroll	: 1,
			autoplay				: false,
			autoplaySpeed		: 1500,
			arrows					: true,
			dots						: true,
			pauseOnHover		: true,
			responsive			: [
				{
					breakpoint	: 1300,
					settings	: { slidesToShow: 3}
				},
				{
					breakpoint: 769,
					settings: {slidesToShow: 2}
				},
				{
	        breakpoint: 520,
					settings: { slidesToShow: 1 }
      }
		]
		});

	});
	$(".slider").slick("refresh");

});
