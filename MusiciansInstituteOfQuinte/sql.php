<?php
	// sql.php	
	
	$host="musinstdb.db.6497471.hostedresource.com";
	$username="musinstdb";
	$password="RobWaite!1"; 
	$db_name="musinstdb"; 
	$tbl_name="members"; 
	
	// Connect to server and select databse.
	$conn = mysql_connect("$host", "$username", "$password");
	$db = mysql_select_db("$db_name", $conn);
	
	if(!db)
	{
		echo "There was an error connecting to the database";
		exit();
	}
?>