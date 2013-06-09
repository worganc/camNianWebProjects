<?php
	//login.php
	
	session_start();
	if(isset($_SESSION['ERRMSG']) && is_array($_SESSION['ERRMSG']) && count($_SESSION['ERRMSG'] > 0))
	{
		$err = "<table>";
		foreach($_SESSION['ERRMSG'] as $msg)
		{
			$err .= "<tr><td>" . $msg . "</td></tr>";
		}
		$err .= "</table>";
		unset($_SESSION['ERRMSG']);
	}
	
?>
<html>
	<?php include("loginbanner.php"); ?>
	<head>
		<title>WebRTC Prototype Login</title>
	</head>
	<body>
		<p>
			<form action="log.php" method="post">
				<h2 align="center">WebRTC Login</h2>
				<table align="center">
					<tr>
						<td>Username</td>
						<td><input name="username" type="text" id="username" /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input name="password" type="text" id="password" /></td>
					</tr>
					<tr>
						<td><input type="submit"  value="Login"/></td>
					</tr>
					<tr>
						<td><?php echo $err; ?></td>
					</tr>
				</table>
				
			</form>
		</p>
	</body>
</html>