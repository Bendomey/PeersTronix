

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

  // ajax
  $('#sort').change(function(){
    let value = $('#sort option:selected').val();
    // alert(value);

    if(value == 'new'){
      let product = [];
      $.ajax({
        type:'Get',
        url:'/getNewProduct',
        dataType:'JSON',
        success:function(data){
            product.push(data);
            alert(JSON.stringify(product));
            // console.log(product['data'][0]);
        },
        error:function(){
          alert('not working');
        }
      })
    }else
    if(value == 'rating'){
      $.ajax({
        type:'Get',
        url:'/sortByProductRating',
        dataType:'JSON',
        success:function(data){
          console.log(data);
        },
        error:function(){
          alert('not working');
        }
      })
    }else
    if(value == 'low_to_high'){
      $.ajax({
        type:'Get',
        url:'/sortByPriceLowToHigh',
        dataType:'JSON',
        success:function(data){
          console.log(data);
        },
        error:function(){
          alert('not working');
        }
      })
    }else
    if (value == 'high_to_low') {
      $.ajax({
        type:'Get',
        url:'/sortByPriceHighToLow',
        dataType:'JSON',
        success:function(data){
          console.log(data);
        },
        error:function(){
          alert('not working');
        }
      })
    }


  });

});
