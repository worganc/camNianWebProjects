<?php
	include("sql.php");
	session_start();
	
	function Destroy()
	{
		unset($_SESSION['DISPLAYNAME']);
		unset($_SESSION['USERNAME']);
		session_write_close();
		header("location: login.php");
	}
	
	if(isset($_SESSION['USERNAME']))
	{
		$username = $_SESSION['USERNAME'];
		$sql="SELECT * FROM Users WHERE username='$username'";
		$result=mysql_query($sql);
	
		if(mysql_num_rows($result) != 1)
		{
			Destroy();
		}		
	}
	else
	{
		Destroy();
	}
?>