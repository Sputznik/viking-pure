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

      jQuery('.quotes-wrapper').find('.quote-pane.active').removeClass('active');

			$el.getTarget();

		});

	}); //End each()

};

jQuery(document).ready(function () {
  jQuery('a[data-behaviour~=viking-quote]').viking_quotes();
});
