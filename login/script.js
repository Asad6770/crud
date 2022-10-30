
$(document).ready(function () {
  $(".load").on("click", function (e) {
    e.preventDefault();
    console.log("clicked");
    $('.submitData').html('');
    $.ajax({
      type: 'get',
      url: $(this).attr('href'),
      success: function (data) {
        $(".submitData").html(data);
      }
    });
  });
});


$(document).ready(function () {
  $(document).on('submit', '.submitData', function (e) {
    e.preventDefault();
    $.ajax({
      type: $(this).attr('method'),
      url: $(this).attr('action'),
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
        if (response.status == true) {
          swal({
            title: "Good job!",
            text: response.message,
            icon: "success",
            button: "Aww yiss!",
          });
          $('#myForm')[0].reset();
          window.location = 'signin.php';
        }
        else {
         swal({
          title: "Invalid!",
          text: response.message,
          icon: "warning",
        });
       }
     }
   });
  });
});

$(document).ready(function () {
  $(document).on('submit', '.login', function (e) {
    e.preventDefault();
    $.ajax({
      type: $(this).attr('method'),
      url: $(this).attr('action'),
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
       if (response.status == true) {
        swal({
          title: "Good job!",
          text: response.message,
          icon: "success",
        });
      //  alert(response.message);
      window.location = '../index.php';
      $('#myForm')[0].reset();
    }
    else {
     swal({
      title: "Invalid!",
      text: response.message,
      icon: "warning",
    });
      // alert(response.message);
      $('#myForm')[0].reset();
    }
  }
});
  });
});