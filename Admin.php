<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleAdmin.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
		include 'database.php';
	?>
	
	<table class="table-loginn">
			<form method="POST">
				<tr><th>Login Administrasjon</th></tr>
				<tr><img src="src/Logo.jpg" alt="logo"></tr>
				<tr><td><div>Brukernavn:</div></td></tr>
				<tr><td><div><input type="text" name="brukernavn" placeholder="  Sett inn brukernavn"><br></div></td></tr>
				<tr><td><div>Passord:</div></td></tr>
				<tr><td><div><input type="password" name="passord" placeholder="  Sett inn passord"><br></div></td></tr>
				<tr><td><div><input type="submit" name="login" value="Login"></div></td></tr>
				<tr><td><div><br></div></td></tr>
			</form>
		</table>
	<?php
		if(isset($_POST["login"]))
		{
			echo("Starting.. <br>");
			$server = "elevweb.akershus-fk.no";
			$user = "Toel1108";
			$password = "1234EE";
			$databaseName = "Toel1108_kampsport";

			$connection = new MySQLi($server, $user, $password, $databaseName);
			if($connection -> connect_error)
			{
				die("Connection failed ".$connection->connect_error);
			}
			else
			{
				echo("Connection Successfull<br>");
			}
			$connection->set_charset("utf8");
			$brukernavn = $_POST["brukernavn"];
			$passord = $_POST["passord"];

			$sql = "SELECT brukernavn, passord FROM Admin;";
			$results = $connection->query($sql);
			
			$foundUser = false;
			while($row = $results->fetch_assoc())
			{
				if($row['brukernavn'] == $brukernavn && $row['passord'] == $passord)
				{
					$foundUser = true;
					echo("Bruker ".$brukernavn . " finnes");
					

					header("Location: AdminSide.php");
die();
					break;
				}				
			}
			if($foundUser == false)
			{
				echo("Wrong username and or password");
			}
		}
	
	$_SESSION['username'] = 'myUsername';

		if(!isset($_SESSION['username'])){

            header("Location:./AdminSide.php?msg=You must login first");
        }
        else{//do something
		}
	
	?>
</body>
</html>