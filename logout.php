<?php
 session_start();
 //unset($_SESSION["username"]);
 //unset($_SESSION["loggedin"]);
 session_destroy();
 echo 'You have cleaned session';
 header('Refresh: 2; URL = login.php');
?>
