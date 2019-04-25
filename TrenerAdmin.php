<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleAdmin.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	
<!--Navbar-->
	<ul>
	  <a href=""><img id="logo" src="src/Logo.jpg" alt=""></a>
	  <li><a href="#home">Home</a></li>
	  <li><a href="InfoMedlemer.php">Info Medlemmer</a></li>
	  <li><a href="OppdaterOgSlett.php">Oppdater og slett</a></li>
	  <li><a href="Registrering.php">Register nye elever</a></li>
	  <li><a href="NyheterAdmin.php">Legg til nyheter</a></li>
	</ul>	
		
<!--Legg til trenerinfo-->		
<div class="content">
	<h1>Informasjon om nye trenere</h1>
	
	<div>
		<table class="table-leggtil">
			<form method="POST">
				<tr><td><div>Overskrift:</div></td></tr>
				<tr><td><div><input type="text" name="overskrift" placeholder="Overskrift"><br></div></td></tr>
				
				<tr><td><div>Nyhet innhold:</div></td></tr>
				<tr><td><div><textarea name="nyhet" placeholder="Skriv inn innlegg her!"></textarea><br></div></td></tr>
				
				
				<tr><td><div><input type="submit" name="leggtil" value="Legg til nyhet" onclick="window.location.href='IndexH.html'"></div></td></tr>
				
			</form>
		</table>
	</div>
	</div>
	
	<input type="text" name="nyhet" placeholder="Skriv inn innlegg her!">
	<?php
	include 'database.php';
	
	if(isset($_POST["leggtil"])){
	$overskrift = $_POST["overskrift"];
	$nyhet = $_POST["nyhet"];
	
	$sql = "INSERT INTO Nyhet (nyhet_navn, nyhet_info) VALUES ('$overskrift', '$nyhet');";
	
	if($connection->query($sql))
				{

					echo('<div class="content">');
					echo('<h3 class="skriftlagttil">');
					echo("Nyheten $overskrift ble lagt til!");
					echo('</h3>');
					echo '</div>';
				}
				else
				{
					echo("Feil i brukerinput: Insert into nyhet " . mysqli_error($connection));
				}
		
		$sql = "SELECT idNyhet FROM Nyhet ORDER BY idNyhet desc limit 5";
				$results = $connection->query($sql);
				if($connection->query($sql))
				{

				
				}
				else
				{
					echo('<div class="content">');
					echo("Feil i brukerinput: Insert into nyhet " . mysqli_error($connection));
					echo '</div>';
				}
				
	}
	?>
	
</body>
</html>