<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
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
	
	<header>	
	<div class="navbar">
		<nav>
			<ul>				
				<li class="leftnav"><a href="Registrering.php">Registrering</a></li>
				<li class="leftnav"><a href="Timeplan.php">Timeplan</a></li>
				<li class="rightnav"><a href="">Konkuranser</a></li>
				<li class="rightnav"><a href="">Om oss</a></li>
			</ul>
		</nav>
		<div class="logo"><img src="src/Logo.jpg" alt="logo"></div>

	</div>
	</header>
</body>
</html>