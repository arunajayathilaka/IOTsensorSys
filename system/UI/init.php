<?php
	session_start();
	$servername = "localhost";
	$mysqlusername = "root";
	$password = "";
	$dbname = "sensorsystem";
	//$_SESSION['username']="mythree";
	mysqli_connect("$servername","$mysqlusername","$password","$dbname")
        or die("couldn't connect db");
	$link=new mysqli("localhost","root","","sensorsystem");
?>