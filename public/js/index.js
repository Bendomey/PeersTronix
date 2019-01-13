

$(document).ready(function() {
  //
  $('.colap').prepend("<i class = 'fa fa-plus mr-2'></i>")

  // collapse
  $("[class='collapse show']").collapse();

  $('.buyProductForm').hide();
  $('.buy').click(function(){
    $(this).hide();
    $('.buyProductForm').show();
  });



});
