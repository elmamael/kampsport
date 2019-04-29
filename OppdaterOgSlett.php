

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
	<?php
		include 'navbarAdmin.php'
	?>
	<!--Navbar end -->
	
	<?php
	
	function slettRad($id) 
	{ 
		print("noe skjedde");
	}
	
	
	$connection->set_charset("utf8");

	$sql = "SELECT fornavn, etternavn, fodselsdato, adresse, tlf, farge 
			FROM Medlem
			JOIN Gradering 
			ON Medlem_idMedlem = Gradering.Medlem_idMedlem 
			JOIN Beltegrad 
			ON Gradering.Beltegrad_idBeltegrad = Beltegrad.idBeltegrad
			order by fornavn asc";
	

	$sql = "select * from Medlem";
	
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
				<th>Adresse</th>
				<th>Tlf</th>
				<th>Grad</th>
				
			</tr>
			");
			
	
		
		while($row = $results->fetch_assoc())
		{
			$fornavn = $row['fornavn'];
			$etternavn = $row['etternavn'];
			$fAAr = $row['fodselsdato'];
			$alder = date("Y") - $fAAr;
			$adresse = $row['adresse'];
			$tlf = $row['tlf'];
			$grad = $row['farge'];
			$idMedlem = $row['idMedlem'];
			

		echo("
			<tr>
				<td>$fornavn</td>
				<td>$etternavn</td>
				<td>$fAAr</td>
				<td>($alder)</td>
				<td>$adresse</td>
				<td>$tlf</td>
				<td>$grad</td>
				<td><a href='Oppdater2.php?idMedlem=$idMedlem'>Oppdater</td>
		
				<td><form method='POST' action=''><button name='ID' method='POST' type='submit' value='$idMedlem'> Slett </button></form></td>
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