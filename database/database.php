<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="yoyo";
	/*Create connection*/
	$conn = mysqli_connect($servername, $username, $password,$db) or die("Connect failed: %s\n". $conn -> error);

    
?>