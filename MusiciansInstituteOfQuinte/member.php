<?php include("auth.php"); ?>

<head>
	<title>MIQ Prototpye Member page</title>
</head>
<html>
	<h1 align="center">Welcome to the MIQ members section</h1>
	<p>
	You are logged in as <?php  echo $_SESSION['DISPLAYNAME']; ?>
	</p>
	
	<form action="logout.php">
		<input type="submit" value="Logout"/>
	</form>
</html>