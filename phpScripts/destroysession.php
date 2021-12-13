<?php
session_start();
session_destroy();
require('../navbar.php');
header('Location: ../index.php');
?>

<p style="color:white; margin:30px;">You have been logged out. <a href="index.php">Go back</a></p>