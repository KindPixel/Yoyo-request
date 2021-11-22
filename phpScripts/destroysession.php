<?php
session_start();
session_destroy();
require('../htmldisplay/navbar.php');
header('Location: ../htmldisplay/index.php');
?>

<p style="color:white; margin:30px;">You have been logged out. <a href="../htmldisplay/index.php">Go back</a></p>