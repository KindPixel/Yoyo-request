
<?php include("navbar.php"); ?>

<script type="text/javascript" src="jsScripts/loginregister.js"></script>


<div class="registerbox">

	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>

	<button style="margin:10px;" type="button" class="btn btn-success btn-sm" id="register">Register</button> <button type="button" class="btn btn-success btn-sm" id="login">Login</button>
	
	<form id="register_form" name="form1" method="post" style="display:none;">
		<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Name" name="name">
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Phone:</label>
			<input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
		</div>
		<div class="form-group" >
			<label for="pwd">City:</label>
			<input type="text" class="form-control" id="city" placeholder="City" name="city">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Password" name="password">
		</div>
		<input style="margin-top:10px;" type="button" name="save" class="btn btn-primary" value="Submit" id="butsave">
	</form>

</div>

<div class="loginbox">

	<form id="login_form" name="form1" method="post">
		
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email_log" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password_log" placeholder="Password" name="password">
		</div>
		<input type="button" name="save" class="btn btn-primary" value="Login" id="butlogin">
	</form>

</div>

