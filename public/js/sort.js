

$(document).ready(function(){
    alert('hello world');

    // $('#mm').click(function(){
      function getMessage(){
      // let value = $( "#sort_please option:selected").val();

        // $('#show_data').html(value);
        $.ajax({
          type: 'Post',
          url: '/getmsg',
          data: '_token = <?php echo csrf_token() ?>',
          success: function (data) {
            $('#show_data').html(data.msg);
          }
        })
    });



});
