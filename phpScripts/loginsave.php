<?php
	require '../database/database.php';
	require '../database/singleton.php';
	session_start();
	if($_POST['type']==1){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$password=$_POST['password'];
		
		$request = $pdo->prepare("select * from crud where email=:email");
		$request->bindParam(":email", $email, PDO::PARAM_STR, 100);
        $request->execute();
		$rownumber = count($request->fetchAll());

		if ($rownumber != 0)
		{
			echo 201;
			$request=null;
		}
		else{
			$request = $pdo->prepare("INSERT INTO `crud`( `name`, `email`, `phone`, `city`, `password`) 
			VALUES (:name,:email,:phone,:city,:password)");

			$request->bindParam(":name",$name, PDO::PARAM_STR, 100);
			$request->bindParam(":email", $email, PDO::PARAM_STR, 100);
			$request->bindParam(":phone", $phone, PDO::PARAM_STR, 100);
			$request->bindParam(":city", $city, PDO::PARAM_STR, 100);
			$request->bindParam(":password", $password, PDO::PARAM_STR, 12);

			if ($request->execute()) {
				echo 200;
				$request=null;
			} 
			else {
				echo 202;
				$request=null;
			}
		}
		
	}


	
	if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];

		$request = $pdo->prepare("select * from crud where email=:email and password=:password");
		$request->bindParam(":email", $email, PDO::PARAM_STR, 100);
		$request->bindParam(":password", $password, PDO::PARAM_STR, 12);
		$request->execute();
		$rownumber = count($request->fetchAll());

		if ($rownumber==1) {
			session_start();
			$_SESSION['email']=$email;
			echo 200;
		}
		else {
			echo 201;
		}
		$request = null;
	}
?>