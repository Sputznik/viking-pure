// MASONARY GRID SCRIPT
jQuery(document).ready(function(){

  jQuery('.articles-masonary').masonry({
    itemSelector: '.orbit-article',
    gutter: '.gutter-sizer',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    horizontalOrder: true
  });

  // BACK TO TOP BUTTON
  // Find the bottom offset of the sidebar widget
  var sidebar   = jQuery('.tabs-wrapper');
  var bottom;

  if( sidebar.length > 0 ) { bottom = sidebar.offset().top + sidebar.height(); }

  jQuery(window).scroll(function () {
    if( bottom != 'undefined' ){
      if (jQuery(this).scrollTop() > bottom  ) {
        jQuery('#back-top').fadeIn();
        } else {
        jQuery('#back-top').fadeOut();
      }
    }
  });

  jQuery('#back-top').click(function () {
    var position = jQuery('.viking-sidebar').offset().top;
    jQuery("html, body").animate({
      scrollTop: position - 150
    }, 600);
    return false;

  });

  // BACK TO TOP BUTTON

});
