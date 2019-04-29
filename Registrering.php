

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleAdmin.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	
	<!--Navbar -->
	<?php
		include 'navbarAdmin.php'
	?>
	
	<!--Innhold på siden -->
	
	
	<div class="content">
	

		
	<h1>Registrer nye medlemmer!</h1>
	
	
		<div>
			<table class="table-leggtil">
				<form method="POST">
					<tr><td><div>Fornavn:</div></td></tr>
					<tr><td><div><input type="text" name="fornavn" placeholder="Ola"><br></div></td></tr>

					<tr><td><div>Etternavn:</div></td></tr>
					<tr><td><div><input type="text" name="etternavn" placeholder="Nordmann"><br></div></td></tr>

					<tr><td><div>Kjønn:</div></td></tr>
					<tr><td><div><select name="kjonn">
							<option value="0">Mann</option>
							<option value="1">Kvinne</option>
					<br></div></td></tr>

					<tr><td><div>Adresse:</div></td></tr>
					<tr><td><div><input type="text" name="adresse" placeholder="Hundremeterskogen 1"><br></div></td></tr>

					<tr><td><div>Fødselsdato:</div></td></tr>
					<tr><td><div><input type="date" name="fodselsdato"><br></div></td></tr>

					<tr><td><div>Telefonnummer:</div></td></tr>
					<tr><td><div><input type="text" name="tlf" placeholder="98765432"><br></div></td></tr>



					<tr><td><div><input type="submit" name="leggtil" value="Registrer elev" onclick="window.location.href='IndexH.html'"></div></td></tr>

				</form>
			</table>
		</div>
		
		
	</div>
	
	<?php
			if(isset($_POST["leggtil"]))
			{
				include'database.php';



				$fornavn = $_POST["fornavn"];
				$etternavn = $_POST["etternavn"];
				$kjonn = $_POST["kjonn"];
				$adresse = $_POST["adresse"];
				$fodselsdato = $_POST["fodselsdato"];
				$tlf = $_POST["tlf"];
		


				$sql = "INSERT INTO Medlem (fornavn, etternavn, kjonn, adresse, fodselsdato, tlf) VALUES ('$fornavn', '$etternavn', '$kjonn', '$adresse', '$fodselsdato', '$tlf');";

				if($connection->query($sql))
				{

					echo('<div class="lagttil">');
					echo('<h3 class="skriftlagttil">');
					echo("Eleven $fornavn $etternavn ble lagt til!");
					echo('</h3>');
					echo '</div>';
				}
				else
				{
					echo("Feil i brukerinput: Insert into elev " . mysqli_error($connection));
				}
				
				
				$sql = "SELECT idMedlem FROM Medlem ORDER BY idMedlem desc limit 1";
				$results = $connection->query($sql);
				if($connection->query($sql))
				{

				
				}
				else
				{
					echo("Feil i brukerinput: Insert into elev " . mysqli_error($connection));
				}
				
				
				while($row = $results->fetch_assoc())
				{
					$idMedlem = $row['idMedlem'];
				}
				
				$dato = date("Y-m-d");
				$sql = "INSERT INTO Gradering (Beltegrad_idBeltegrad, Medlem_idMedlem, dato) VALUES ('1', '$idMedlem', '$dato');";
				
				
				
				if($connection->query($sql))
				{
					echo('fungerte');
				
				}
				else
				{
					echo("Feil i brukerinput: Insert into elev " . mysqli_error($connection));
				}
				
			}
			

		?>
</body>
</html>