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
	
	<!--Navbar -->
	<ul>
	  <a href=""><img id="logo" src="src/Logo.jpg" alt=""></a>
	  <li><a href="#home">Home</a></li>
	  <li><a href="InfoMedlemer.php">Info Medlemmer</a></li>
	  <li><a href="OppdaterOgSlett.php">Oppdater og slett</a></li>
	  <li><a href="Registrering.php">Register nye elever</a></li>
	  <li><a href="NyheterAdmin.php">Legg til nyheter</a></li>
	</ul>
	
	<?php
	
	function slettRad($id) 
	{ 
		print("noe skjedde");
	}
	
	
	$connection->set_charset("utf8");

	$sql = "SELECT * FROM Medlem";
	
	if($results = $connection->query($sql))
	{
		
	}
	else
	{
		echo("Feil i brukerinput: " . mysqli_error($connection));
	}

	?>
	
	<!--Innhold på siden -->
	
	<div class="content">
		<h1>Oppdater medlemsinformasjon</h1>
	
		<?php


		echo("
		<table>
			<tr>
				<th>Fornavn</th>
				<th>Etternavn</th> 
				<th>Født</th>
				<th>Alder</th>
			</tr>

			");
		while($row = $results->fetch_assoc())
		{
			$fornavn = $row['fornavn'];
			$etternavn = $row['etternavn'];
			$fAAr = $row['fødselsdato'];
			$alder = date("Y") - $fAAr;
			$idMedlem = $row['idMedlem'];

		echo("
			<tr>
				<td>$fornavn</td>
				<td>$etternavn</td>
				<td>$fAAr</td>
				<td>($alder)</td>
				<td><a href='Oppdater2.php?idMedlem=$idMedlem'>Oppdater</td>
				<td><form method='POST' action=''><button name='ID' method='POST' type='submit' value='$idMedlem'>Slett</button></form></td>
			</tr>
			");	
		}

		echo("
			</table>
		");	

		if(isset($_POST["ID"]))
		{
			$slette = $_POST["ID"];		
			$sql = "DELETE FROM Medlem WHERE idMedlem='$slette'"; 
			if ($connection->query($sql) === TRUE) 
			{ 
				echo ("Record was deleted successfully."); 
			}  
			else
			{ 
				echo("Feil i spørring: " . mysqli_error($connection)); 
			} 

		}
		?>
	
	</div>
</body>
</html>