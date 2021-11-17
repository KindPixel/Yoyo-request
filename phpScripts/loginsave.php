<?php
	require '../database/database.php';
	session_start();
	if($_POST['type']==1){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$password=$_POST['password'];
		
		$duplicate=mysqli_query($conn,"select * from crud where email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo 201;
		}
		else{
			$sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `city`, `password`) 
			VALUES ('$name','$email',$phone,'$city', '$password')";
			if (mysqli_query($conn, $sql)) {
				echo 200;
			} 
			else {
				echo 202;
			}
		}
		mysqli_close($conn);
	}


	
	if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$check=mysqli_query($conn,"select * from crud where email='$email' and password='$password'");
        
		$checkNum = mysqli_num_rows($check);

		if ($checkNum==1) {
			$_SESSION['email']=$email;
			echo 200;
		}
		else {
			echo 201;
		}
		mysqli_close($conn);
	}
		
        //
        // $check=mysqli_query($conn,"select * from crud where email='thomas.lima@viacesi.fr' and password='thomas78'");
        // // print_r($check);
        // //print_r(mysqli_num_rows($check));
        // if (mysqli_num_rows($check) == 1) {
        //     var_dump($check);
        // }
?>