<?php
	// setuseronline.php
	include("sql.php");
	
	if(isset($_SESSION['USERNAME']))
	{
		$username = $_SESSION['USERNAME'];
		$sql="UPDATE Users SET online= 1 WHERE username='$username'";
		$result=mysql_query($sql);		
	}
	else
	{
		unset($_SESSION['DISPLAYNAME']);
		unset($_SESSION['USERNAME']);
		session_write_close();
		header("location: login.php");
	}
?>
