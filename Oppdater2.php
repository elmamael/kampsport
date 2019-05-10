<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
		include 'database.php';
	if (isset($_SESSION['brukernavn'])){

	}
	else {
		header("Location:Admin.php");
	}
	
	$connection->set_charset("utf8");

	if(isset($_GET["idMedlem"]))
	{
		$idMedlem = $_GET["idMedlem"];
	
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
		echo("Feil i brukerinput endre info: " . mysqli_error($connection));
	}


	while($row = $results->fetch_assoc())
	{
		$fornavn = $row['fornavn'];
		$etternavn = $row['etternavn'];
		$fodselsdato = $row['fodselsdato'];
		$alder = date("Y") - $fodselsdato;
		$ID_medlem = $row['idMedlem'];
		$adresse = $row['adresse'];
		$tlf = $row['tlf'];

		echo("	
			<form method='POST'>
				Fornavn:<br>
				<input type='text' name='fornavn' value='$fornavn'><br>
				Etternavn:<br>
				<input type='text' name='etternavn' value='$etternavn'><br>
				Født:<br>
				<input type='text' name='fodselsdato' value='$fodselsdato'><br>
				Adresse:<br>
				<input type='text' name='adresse' value='$adresse'><br>
				Telefon:<br>
				<input type='text' name='tlf' value='$tlf'><br>
				
				
				<input type='submit' name='Oppdater' value='Oppdater'>
				<br><br>
				Beltegrad <br>
				");
				
				$sql = "SELECT * FROM Beltegrad";
				$result = $connection->query($sql);
				echo "<select name='idBeltegrad'>";
				while($row = $result->fetch_assoc()) {
					$idBeltegrad = $row["idBeltegrad"];
					$Farge = $row["Farge"];
					
					echo "<option value=$idBeltegrad>$Farge</option>";
				}
			echo ("</select><br>
			Graderingsdato<br>
			<input type='date' name='dato' placeholder='2019-01-18'><br>
			<input type='submit' name='LeggTilGradering' value='Legg til ny gradering!'><br>
			</form>
		");
	}
	
	if(isset($_POST["Oppdater"]))
	{
		$fornavn = $_POST["fornavn"];
		$etternavn = $_POST["etternavn"];
		$fodselsdato = $_POST["fodselsdato"];
		$adresse = $_POST["adresse"];
		$tlf = $_POST["tlf"];
		
		$sql = "UPDATE Medlem
				SET fornavn = '$fornavn', etternavn = '$etternavn', fodselsdato = '$fodselsdato', adresse = '$adresse', tlf = '$tlf' 
				WHERE idMedlem = $idMedlem;";

			if($connection->query($sql))
			{
				header('Location: OppdaterOgSlett.php'); 

			}
			else{
				echo("Error description: " . mysqli_error($connection));
			}	
	}	
	
	if(isset($_POST["LeggTilGradering"]))
	{
		$idBeltegrad = $_POST["idBeltegrad"];
		$dato = $_POST["dato"];
		
		$sql = "INSERT INTO Gradering (Medlem_idMedlem, Beltegrad_idBeltegrad, dato) VALUES ('$idMedlem', '$idBeltegrad', '$dato');";
				if($connection->query($sql))
				{
					echo("En ny gradering for $fornavn $etternavn ble lagt til!");
				}
				else{
					echo("Feil i brukerinput: " . mysqli_error($connection));
				}
	}	
	?>
	
</body>
</html>