jQuery.fn.viking_quotes = function() {

	return this.each(function() {

		var $el = jQuery(this);

		// RETURN VISIBLE QUOTE SECTION
		$el.getTarget = function(){
			var selectedLogo = jQuery($el).attr('href');
			var quotePane = jQuery('.quotes-wrapper').find(selectedLogo);
			jQuery(quotePane).addClass('active');
			return jQuery(quotePane);
		};

    // SHOWS QUOTE PANE BASED ON THE SELECTED LOGO
		$el.on( 'click', function(e) {
      e.preventDefault();

      jQuery('.quotes-wrapper').find('.quote-pane.active').removeClass('active');

			// SMOOTH SCROLL TO THE QUOTE SECTION
			jQuery('html, body').stop().animate({
				scrollTop: $el.getTarget().offset().top
			}, 1000);

		});

	}); //End each()

};

jQuery(document).ready(function () {
  jQuery('a[data-behaviour~=viking-quote]').viking_quotes();
});
