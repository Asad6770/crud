$(document).ready(function() {
  $(".load").on("click", function(e){
    e.preventDefault();
    console.log("clicked");
    $('.modal-body').html('');
    $.ajax({
      type: 'get',
      url: $(this).attr('href'),
      success: function (data) {
        $(".modal-body").html(data);
      }
    });
  });
});

$(document).ready(function(){
  $(document).on('submit', '.submitData', function(e){
    e.preventDefault();
    $.ajax({
      type: $(this).attr('method'),
      url: $(this).attr('action'),
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      dataType: 'json',
      success: function(response){
        var jsonData = JSON.parse(response.status);
        if (response.status == true) {
         window.location.reload();
       }
     }
   });
  });
});