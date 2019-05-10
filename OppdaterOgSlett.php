<?php 
	session_start();
?>
<?php
	include 'headerAdmin.php';
?>

<body>
	
	<?php
		include 'database.php';
	if (isset($_SESSION['brukernavn'])){

	}
	else {
		header("Location:Admin.php");
	}
	?>
	
	<!--Navbar -->
	<?php
		include 'navbarAdmin.php'
	?>
	<!--Navbar end -->
	
	<!--Innhold på siden -->
	
	<div class="content">
		<h1>Oppdater medlemsinformasjon</h1>
		<table class="medlemstabell">
			<tr>
				<th>Fornavn</th>
				<th>Etternavn</th> 
				<th>Adresse</th>
				<th>Fødselsdato</th>
				<th>Telefon</th>
				<th>Grad</th>
				<th>Graderingsdato</th>
				<th>Oppdater</th>
				<th>Slett</th>
			</tr>
	<?php
		$sql = "SELECT idMedlem, fornavn, etternavn, adresse, fodselsdato, tlf, dato, Farge
				FROM Medlem
				JOIN Gradering
				ON Medlem.idMedlem = Gradering.Medlem_idMedlem
				JOIN Beltegrad
				ON Gradering.Beltegrad_idBeltegrad = Beltegrad.idBeltegrad
				order by fornavn asc, idBeltegrad desc";
	
		if($results = $connection ->query($sql)){
			
		}
		else{
			echo("Feil i brukerinput Oppdater og slett: " . mysqli_error($connection));
		}
			
		$navn = "";
			
			
		while($row = $results -> fetch_assoc()) {
			$fornavn = $row["fornavn"];
			$etternavn = $row["etternavn"];
			$adresse = $row["adresse"];
			$fodselsdato = $row["fodselsdato"];
			$tlf = $row["tlf"];
			$dato = $row["dato"];
			$farge = $row["Farge"];
			$idMedlem = $row["idMedlem"];
		
			if($navn != $idMedlem)  {
		
				echo("
					<tr>
						<td>$fornavn</td>
						<td>$etternavn</td>
						<td>$adresse</td>
						<td>$fodselsdato</td>
						<td>$tlf</td>
						<td>$farge</td>
						<td>$dato</td>
						<td><a href='Oppdater2.php?idMedlem=$idMedlem'>Oppdater</td>
						<td><form method='POST' action=''><button name='ID' method='POST' type='submit' value='$idMedlem'>Slett</button></form></td>
					</tr>
				");
			}
			
			$navn = $idMedlem;
				
		
		
		}
		
		echo("
			</table>
		");
		
		if(isset($_POST["ID"]))
		{
			$delete = $_POST["ID"];
			
			$sql = "DELETE FROM Gradering WHERE Medlem_idMedlem='$delete'";
			
			if ($connection->query($sql) === TRUE){
				
			}
			
			else{
				echo("Feil i spørring: " . mysqli_error($connection));
			}
			
			$sql = "DELETE FROM Medlem WHERE idMedlem='$delete'";
			
			if ($connection->query($sql) === TRUE){
				
			}
			
			else{
				echo("Feil i spørring: " . mysqli_error($connection));
			}
			//echo("$_POST['ID']");
		}
	?>
	</div>
</body>
</html>