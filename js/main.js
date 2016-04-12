$(function() {

  var menu = $('.menu');
  var menuOffset = menu.offset().top;

  $(window).on('scroll', function() {
    var page<a href="http://www.jqueryscript.net/tags.php?/Scroll/>Scroll/"\</a> = $(window).scrollTop();
    if(menuOffset <= pageScroll) {
      menu.addClass('fixed');
    }
      else {
        menu.removeClass('fixed');
      }
  });

});
