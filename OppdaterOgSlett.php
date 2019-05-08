<?php
	include 'headerAdmin.php';
?>

<body>
	
	<?php
	include 'database.php';
	?>
	
	<!--Navbar -->
	<?php
		include 'navbarAdmin.php'
	?>
	<!--Navbar end -->
	
	
	<?php
			
		$sql = "SELECT fornavn, etternavn, adresse, fodselsdato, tlf, dato, Farge
				FROM Medlem
				JOIN Gradering
				ON Medlem.idMedlem = Gradering.Medlem_idMedlem
				JOIN Beltegrad
				ON Gradering.Beltegrad_idBeltegrad = Beltegrad.idBeltegrad
				order by fornavn asc";
	
		if($results = $connection ->query($sql)){
			
		}
		else{
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
				<th>Adresse</th>
				<th>Fødselsdato</th>
				<th>Alder</th>
				<th>Tlf</th>
				<th>Grad</th>
				<th>Graderingsdato</th>
			</tr>

			");
		
		while($row = $results -> fetch_assoc()) {
			$fornavn = $row["fornavn"];
			$etternavn = $row["etternavn"];
			$adresse = $row["adresse"];
			$fodselsdato = $row["fodselsdato"];
			$alder = date("Y") - $fAAr;
			$tlf = $row["tlf"];
			$dato = $row["dato"];
			$farge = $row["Farge"];
		
		
		echo("
			<tr>
				<td>$fornavn</td>
				<td>$etternavn</td>
				<td>$adresse</td>
				<td>$fodselsdato</td>
				<td>$alder</td>
				<td>$tlf</td>
				<td>$farge</td>
				<td>$dato</td>
				<td><a href='Oppdater2.php?idMedlem=$idMedlem'>Oppdater</td>
				<td><form method='POST' action=''><button name='ID' method='POST' type='submit' value='$idMedlem'>Slett</button></form></td>
			</tr>
		");
		}
		
		echo("
			</table>
		");
	?>
	</div>
</body>
</html>