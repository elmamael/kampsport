<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	include 'database.php';
	
	
	
	$connection->set_charset("utf8");

	if(isset($_GET["idMedlem"]))
	{
		$idMedlem = $_GET["idMedlem"];;
	}
	else
	{
		die("Må sende idMedlem");
	}
	
	$sql = "SELECT * FROM Medlem 
			
			WHERE idMedlem = $idMedlem";
	
	if($results = $connection->query($sql))
	{
		
	}
	else
	{
		echo("Feil i brukerinput: " . mysqli_error($connection));
	}


	while($row = $results->fetch_assoc())
	{
		$fornavn = $row['fornavn'];
		$etternavn = $row['etternavn'];
		$fAAr = $row['fodselsdato'];
		$alder = date("Y") - $fAAr;
		$ID_medlem = $row['idMedlem'];

		echo("	
			<form method='POST'>
				Fornavn:<br>
				<input type='text' name='fornavn' value='$fornavn'><br>
				Etternavn:<br>
				<input type='text' name='etternavn' value='$etternavn'><br>
				Født:<br>
				<input type='text' name='fodselsdato' value='$fAAr'><br>
				
				
				<input type='submit' name='Oppdater' value='Oppdater'>
			</form>
		");
	}
	
	if(isset($_POST["Oppdater"]))
	{
		$fornavn = $_POST["fornavn"];
		$etternavn = $_POST["etternavn"];
		$fAAr = $_POST["født"];
		
		$sql = "UPDATE Medlem
				SET fornavn = '$fornavn', etternavn = '$etternavn', fodselsdato = '$fAAr'
				WHERE idMedlem = $idMedlem;";

			if($connection->query($sql))
			{
				header('Location: OppdaterOgSlett.php'); 

			}
			else{
				echo("Error description: " . mysqli_error($connection));
			}	
	}	
	?>
	
</body>
</html>