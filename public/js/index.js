

$(document).ready(function() {
  //
  $('.colap').prepend("<i class = 'fa fa-plus mr-2'></i>")

  // collapse
  $("[class='collapse show']").collapse();

  $('.cardPro').hover(function(){
    $('.cardPro').addClass('shadow');
  },function(){
    $('.cardPro').removeClass('shadow');
  }
);

});
