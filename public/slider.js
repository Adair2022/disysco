$(document).on('ready', function(){
    setInterval(function() {
      $('.slider-images').animate({left: '-=33.33333%'}, 500, function() {
        if ($(this).css('left') == '-200%') {
          $(this).css('left', 0);
        }
      });
    }, 3000);
  });
  