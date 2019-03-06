<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	/**
	*Setup info:
	*/
	/*if(isset($_POST["submit"]))*/
	{
		$server = "elevweb.akershus-fk.no";
		$user = "Toel1108";
		$password = "1234EE";
		$databaseName = "Toel1108_kampsport";

		$connection = new MySQLi($server, $user, $password, $databaseName);
		if($connection -> connect_error)
		{
			die("Connection failed ".$connection->connect_error);
		}
		
		/*
		else
		{
			echo("Connection Successfull<br>");
		}
		
		$connection->set_charset("utf8");
		*/
	}
		?>
	
</body>
</html>