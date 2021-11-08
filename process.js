$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        name: $("#name").val(),
        email: $("#request").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "save.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
  });