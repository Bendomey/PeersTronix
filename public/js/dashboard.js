



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
  })

  // let current = $('.currentPass').val();
  // let newPass = $('.newPass').val();
  // for Security
  // $('.saveSecSetting').click(function() {
  //   if(current === newPass){
  //     // e.preventDefault();
  //     $(this).append('password shouldn\' be the same')
  //     return false;
  //   }
  //   return true;
  // })
    $('.confirmPass').hide();
    $('.newPass').focus(function () {

        $('.confirmPass').show();
    });

});


