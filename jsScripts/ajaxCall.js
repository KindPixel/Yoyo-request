$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        name: $("#name").val(),
        request: $("#request").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "./phpScripts/save.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
  });