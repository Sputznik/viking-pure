// MASONARY GRID SCRIPT
$(document).ready(function(){

  $('.articles-masonary').masonry({
    itemSelector: '.orbit-article',
    gutter: 40,
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

  // BACK TO TOP BUTTON
  // Find the bottom offset of the sidebar widget
  var sidebar   = $('.tabs-wrapper');
  var bottom    = sidebar.offset().top + sidebar.height();

  $(window).scroll(function () {

    if ($(this).scrollTop() > bottom ) {
      $('#back-top').fadeIn();
      } else {
      $('#back-top').fadeOut();
    }
  });

  $('#back-top').click(function () {
    var position = $('.viking-sidebar').offset().top;
    $("html, body").animate({
      scrollTop: position - 150
    }, 600);
    return false;

  });

  // BACK TO TOP BUTTON



});
