<?php
	// setuserffline.php
	include("sql.php");
	
	if(isset($_SESSION['USERNAME']))
	{
		$username = $_SESSION['USERNAME'];
		$sql="UPDATE Users SET online= 0 WHERE username='$username'";
		mysql_query($sql);		
	}
	else
	{
		unset($_SESSION['DISPLAYNAME']);
		unset($_SESSION['USERNAME']);
		session_write_close();
		header("location: login.php");
	}
?>