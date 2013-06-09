<?php
	//logout.php
	
	session_start();
	
	unset($_SESSION['DISPLAYNAME']);
	unset($_SESSION['USERNAME']);
	header("location: index.html");
?>