<?php
    require "../database/singleton.php";
    session_start();

    $name=$_SESSION['name'];
    $iduser=$_SESSION['id'];
    $asked=$_POST['request'];

    
    $request = $pdo->prepare("INSERT INTO `request`( `id_user`, `name`, `request`) 
    VALUES (:id_user,:name,:request)");

    $request->bindParam(":id_user",$iduser, PDO::PARAM_STR);
    $request->bindParam(":name", $name, PDO::PARAM_STR);
    $request->bindParam(":request", $asked, PDO::PARAM_STR);



    if ($request->execute()) {
        echo 200;
        $request=null;
    } 
    else {
        echo 201;
        $request=null;
    }

?>