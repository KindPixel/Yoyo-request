$(document).ready(function() {


	$('#login').on('click', function() {
		$("#login_form").show();
		$("#register_form").hide();
	});
	$('#register').on('click', function() {
		$("#register_form").show();
		$("#login_form").hide();
	});

	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var city = $('#city').val();
		var password = $('#password').val();
		if(name!="" && email!="" && phone!="" && password!="" ){
			$.ajax({
				url: "../phpScripts/loginsave.php",
				type: "POST",
				data: {
					type: 1,
					name: name,
					email: email,
					phone: phone,
					city: city,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					statusCode = dataResult.substr(dataResult.length - 3);
					if(statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#register_form').find('input:text').val('');
						$("#success").show();
						$('#success').html('Registration successful !'); 						
					}
					else if(statusCode==201) {
						$("#error").show();
						$('#error').html('Tyhis email is already registered :/');
					}
					else {
                        alert("error");
                    }
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
	$('#butlogin').on('click', function() {
		var email = $('#email_log').val();
		var password = $('#password_log').val();
		if(email!="" && password!="" ){
			$.ajax({
				url: "../phpScripts/loginsave.php",
				type: "POST",
				data: {
					type:2,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					statusCode = dataResult.substr(dataResult.length - 3);
					if(statusCode==200){
						console.log("sucess");  
						document.location.href = "../htmldisplay/index.php";                 					
					}
					if(statusCode==201){
						$("#error").show();
						$('#error').html('Invalid Email or Password !');
					}					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});