
$(document).ready(function(){

  $('.btn-sm').hover(function(){
    // for the icons
    $(this).css({
      'color': '#fff',
      'transition': 'color 0.125s ease 0.225s'
      });
  }, function(){
    $(this).css('color', '#000');
  }
);

});
