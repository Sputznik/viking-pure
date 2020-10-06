$.fn.single_filters = function(){

  return this.each(function(){
    var $el 					= $( this ),
        $filters      = $('.filters'),
			  $target 			= $('.articles-masonary'),
			  html 					= $target.html();


    /* GET ACTIVE FILTERS  */
    $el.filter_selector = function(){

      $active_filter = $filters.find('.filter-checkbox:checked');

      var selector 	= [];

      $active_filter.each(function( index, selectedFilter ){

        var tax = $(selectedFilter).data('tax');

        if( tax != undefined  ){ selector.push(tax); }

      });

      return selector;
    }
    /* GET ACTIVE FILTERS  */


    /* FILTER ITEMS */
    $el.filter_items = function(){

      var postFilters = $el.filter_selector();

      if( postFilters.length == 0 ){ postFilters.push("articles"); }

      $target.html( html );						/* RESET HTML ELEMENTS */

      var finalArr = []; /* STORES THE POST ID OF ALL THE POSTS BASED ON THE SELECTED FILTERS */

      /* ITERATE THROUGH ALL THE POSTS */
			$target.find("[data-post_type]").filter( function( i,item ){

				var $item = $(this);

				for (var i = 0; i < postFilters.length; i++) {

  				var catFilter = postFilters[i];
  				/* CHECKS WHETHER THE CURRENT POST BELONGS TO THE SELECTED FILTERS CATEGORY */
  				if( $item.is('[data-post_type~=' + catFilter + ']' ) ) {
  					finalArr.push('[data-id='+$item.data('id')+']');
          }

				}

			});

      $target.find("[data-post_type]:not("+finalArr.toString()+")").remove(); /* REMOVE THE IRRELEVANT POSTS */

      //UPDATES MASONARY UI
      setTimeout(function() {
         var $container = $('.articles-masonary');
         $container.masonry('reloadItems');
         $container.masonry();
      },0);

    }


      $el.on('change',function(){ $el.filter_items(); });

  }); /* FILTER ITEMS */

}

$("document").ready(function() { $('[data-filter~=primary]').single_filters(); });
