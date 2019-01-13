



// for image preview
function previewImage(event){
    var reader = new FileReader();
    var imageField = document.getElementById('img');

    reader.onload = function () {
        if (reader.readyState == 2){
            imageField.src = reader.result;
        }
    }

    reader.readAsDataURL(event.target.files[0]);
}


$(document).ready(function(){
// alert('a')
  // profile
  // for account settings
  $('.saveAccSetting').hide();
  $('.editAccSetting').click(function() {
    $(this).hide();
    $('.saveAccSetting').show();
    $('input[readonly]').removeAttr('readonly');
  });


    $('.confirmPass').hide();
    $('.newPass').focus(function () {

        $('.confirmPass').show();
    });

    // for deleting modal in buyer_info_view
    $('.deleteView')


    // for view modal in the view_product
    $('.view_product').click(function(){
      let data = $(this).data('product');
      for (key in data) {
        $(`input[name=${key}]`).val(data[key]);
      }
      for(key in data){
        $(`textarea[name=${key}]`).text(data[key]);
      }
      $('#thumb_picture').attr('src',`${data.thumb_picture}`);
      $('#image_one').attr('src',`${data.image_two}`);
      $('#image_two').attr('src',`${data.image_three}`);
      $('#image_four').attr('src',`${data.image_four}`);
      $('#viewProduct').modal('show');
    });
});
