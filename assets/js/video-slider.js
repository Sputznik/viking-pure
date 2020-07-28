
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

	// Stop the video after the modal is closed
	$(".ytube-video.modal").on('hidden.bs.modal',function(){
			var clickedVideo = $(this);
			var player = $(clickedVideo).find('iframe');
			var playerUrl = $(player).attr('src');
			 $(player).attr("src", playerUrl);
	});

});
