<?php
	include("sql.php"); // Connect to the database
	
	session_start();

	$errmsg = array();
	$errflag = false;
	
	$username = stripslashes($_POST['username']);
	$password = stripslashes($_POST['password']);
		
	if($username == '')
	{
		$errmsg[] = 'Username missing';
		$errflag = true;
	}
	
	if($password == '')
	{
		$errmsg[] = 'Password missing';
		$errflag = true;
	}
	
	if($errflag)
	{
		$_SESSION['ERRMSG'] = $errmsg;
		session_write_close();
		header("location: login.php");
		exit();
	}	
	
	$sql="SELECT * FROM Users WHERE username='$username' and password='$password'";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result) == 1)
	{
		while($row = mysql_fetch_assoc($result))
		{
			$_SESSION['USERNAME'] = $username;
			$_SESSION['DISPLAYNAME'] = $row["displayname"];
			session_write_close();
			header("location: member.php");
		}
	}
	else 
	{
		$errmsg[] = 'Invalid username or password';
		$_SESSION['ERRMSG'] = $errmsg;
		session_write_close();
		header("location: login.php");
		exit();
	}
?>
