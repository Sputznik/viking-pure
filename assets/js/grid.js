// MASONARY GRID SCRIPT
$(document).ready(function(){

  $('.articles-masonary').masonry({
    itemSelector: '.orbit-article',
    gutter: 40,
    columnWidth: '.grid-sizer',
    percentPosition: true
  });

});
