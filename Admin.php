<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleLogin.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	<img src="src/Logo.jpg" alt="logo">
	
	<table class="table-loginn">
			<form method="POST">
				<tr><th>Login Administrasjon</th></tr>
				<tr><td><div>Brukernavn:</div></td></tr>
				<tr><td><div><input type="text" name="brukernavn" placeholder="  Sett inn brukernavn"><br></div></td></tr>
				<tr><td><div>Passord:</div></td></tr>
				<tr><td><div><input type="password" name="passord" placeholder="  Sett inn passord"><br></div></td></tr>
				<tr><td><div><input type="submit" name="login" value="Login"></div></td></tr>
				<tr><td><div><br></div></td></tr>
			</form>
		</table>
	
	
		<?php
		include 'database.php';
		if(isset($_POST["login"]))
		{
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
					session_start();
					$_SESSION['brukernavn'] = $brukernavn;
					
					header("Location:AdminSide.php?login=success");
					exit();
				}				
			}
			if($foundUser == false)
			{
				echo("Wrong username and or password");
			}
		}
	?>
</body>
</html>