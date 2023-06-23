jQuery.fn.viking_quotes = function() {

	return this.each(function() {

		var $el = jQuery(this);

		// RETURN VISIBLE QUOTE SECTION
		$el.getTarget = function(){
			var selectedLogo = jQuery($el).attr('href');
			var quotePane = jQuery('.quotes-wrapper').find(selectedLogo);
			jQuery(quotePane).addClass('active');
		};

    // SHOWS QUOTE PANE BASED ON THE SELECTED LOGO
		$el.on( 'click', function(e) {
      e.preventDefault();
			jQuery('a[data-behaviour~=viking-quote]').find('img').removeClass('remove-grayscale'); // ADD GRAYSCALE ON ALL THE SLIDES
      jQuery('.quotes-wrapper').find('.quote-pane.active').removeClass('active');

			$el.getTarget();

		});

	}); //End each()

};

jQuery(document).ready(function () {
  jQuery('a[data-behaviour~=viking-quote]').viking_quotes();

	// QUOTES SLICK

	// SLICK INIT EVENT MUST BE DECLARED BEFORE THE SLICK IS INITIALIZED
	jQuery('[data-behaviour~=quotes-slick]').on('init', function(event, slick) {
		if(slick.$slides.length){
			jQuery(slick.$slides[0]).find('img').addClass('remove-grayscale'); // REMOVE GRAYSCALE FROM THE FIRST SLIDE
		}
	});

	jQuery('[data-behaviour~=quotes-slick]').each( function(){

		var $el = jQuery( this );

		$el.slick({
			slidesToShow	: $el.data('items'),
			slidesToScroll	: 1,
			autoplay				: true,
			autoplaySpeed		: 1500,
			dots						: false,
			arrows					: true,
			pauseOnHover		: false,
			responsive			: [
			{
				breakpoint	: 960,
				settings	: { slidesToShow: 3}
			},
			{
        breakpoint: 520,
				settings: { slidesToShow: 2 }
    	}
		]
		});

	});

	jQuery('[data-behaviour~=quotes-slick]').on('afterChange', function(event, slick, currentSlide){

		 // HIDE ACTIVE QUOTE PANE
		 jQuery('.quotes-wrapper').find('.quote-pane.active').removeClass('active');
		 jQuery('a[data-behaviour~=viking-quote]').find('img').removeClass('remove-grayscale'); // ADD GRAYSCALE

		 // SHOW NEW QUOTE PANE BASED ON THE CURRENT SLIDE
		 var elSlide = jQuery(slick.$slides[currentSlide]); // GET THE CURRENT SLIDE ELEMENT
		 var selectedLogo = jQuery(elSlide).attr('href');

		 var quotePane = jQuery('.quotes-wrapper').find(selectedLogo);
		 jQuery(elSlide).find('img').addClass('remove-grayscale'); // REMOVE GRAYSCALE
		 jQuery(quotePane).addClass('active');

	});

	// END QUOTES SLICK

});
