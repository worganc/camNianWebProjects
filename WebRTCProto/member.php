<?php 
	include("auth.php"); 
	include("sql.php");
	session_start();
	$sql="SELECT * FROM Users WHERE online=1";
	$result=mysql_query($sql);
			
	if(mysql_num_rows($result) > 0)
	{
		$onlineusers = "<table>";
		while($row = mysql_fetch_assoc($result))
		{
			$displayname = $row["displayname"];
			if($displayname != $_SESSION["DISPLAYNAME"])
			{
				$onlineusers .= "<tr><td>" . $row["displayname"] . "</td></tr>";
			}
		}
		$onlineusers .= "</table>";
	}
?>

<head>
	<title>WebRTC Prototpye Member page</title>
</head>
<html>
	<?php include("loginbanner.php"); ?>
	<h1>Welcome to your home page</h1>
	<p>
		<h2>Available Users</h2>
		<?php echo $onlineusers ?>
	</p>
</html>