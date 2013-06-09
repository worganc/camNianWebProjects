<?php
	//logout.php
	
	session_start();
	include("setuseroffline.php");	
	unset($_SESSION['DISPLAYNAME']);
	unset($_SESSION['USERNAME']);
	header("location: index.html");
?>