
$(document).ready(function(){
// alert('ehlll')
  $('.btn-sm').hover(function(){
    // for the brand icons
    $(this).css({
      'color': '#fff',
      'transition': 'color 0.125s ease 0.225s'
      });
  }, function(){
    $(this).css('color', '#000');
    }
  );


});
