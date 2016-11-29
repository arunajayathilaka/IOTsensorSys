<?php
//session_start();
 //require("checklogin.php");
 session_start();
//session_destroy();
 
 unset($_SESSION['username']);
 unset($_SESSION['email']);
 header("Location: page-login.php"); 
 ?>