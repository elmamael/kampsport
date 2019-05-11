<?php 
	session_start();
?>
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
	if (isset($_SESSION['brukernavn'])){

	}
	else {
		header("Location:Admin.php");
	}
	?>
	
	<!--Navbar -->
	<?php
		include 'navbarAdmin.php';
	?>
	<!--Navbar end -->
	
	<!--Innhold på siden -->
	
	<div class="content">
		
		<h1>Medlemsinformasjon</h1>
		
		<table class="medlemstabell">
					<tr>
						<th>Fornavn</th>
						<th>Etternavn</th> 
						<th>Adresse</th> 
						<th>Alder</th>
						<th>Telefon</th>
						<th>Grad</th>
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
			$alder = date("Y") - $fodselsdato;
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
						<td>$alder</td>
						<td>$tlf</td>
						<td>$farge</td>
					</tr>
				");
			}
			
			$navn = $idMedlem;
		
		}

				echo("

				</table>
			");


		?>
		
	</div>
	
</body>
</html>