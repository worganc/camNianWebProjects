<?php
	if(isset($_SESSION['USERNAME']))
	{
		echo "You are logged in as " . $_SESSION['DISPLAYNAME'] . ". <a href='logout.php'>Logout</a>";
	}
	else 
	{
		echo "<a href='login.php'>Login</a>";
	}
?>