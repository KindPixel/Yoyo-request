$(document).ready(function() {
    $('#submit-request').on('click', function() {
		var request = $('#request').val();
		if(request!=""){
			$.ajax({
				url: "../phpScripts/askprocess.php",
				type: "POST",
				data: {
					request: request,					
				},
				cache: false,
				success: function(dataResult){
					statusCode = dataResult.substr(dataResult.length - 3);
                    console.log(statusCode);
					if(statusCode==200){
						$("#success").show();
						$('#success').html('Well submited!');
                        $('#request').val('');              					
					}
					if(statusCode==201){
                        $("#error").show();
						$('#error').html('Log urself in before submiting a request');
					}					
				}
			});
		}
        else {
            $("#error").show();
			$('#error').html('Write something dummy');
        }
	});
});