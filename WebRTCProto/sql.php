<?php
	// sql.php	
	
	$host="camnianWebRtc.db.6497471.hostedresource.com";
	$username="camnianWebRtc";
	$password="WebRTC1!"; 
	$db_name="camnianWebRtc"; 
	$tbl_name="Users"; 
	
	// Connect to server and select databse.
	$conn = mysql_connect("$host", "$username", "$password");
	$db = mysql_select_db("$db_name", $conn);
	
	if(!db)
	{
		echo "There was an error connecting to the database";
		exit();
	}
?>