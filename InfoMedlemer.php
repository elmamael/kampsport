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
	</ul>
	
	
	<!--Innhold på siden -->
	
	<div class="content">
		
		<h1>Medlemsinformasjon</h1>
	
		<?php
			$connection->set_charset("utf8");

			$sql = "SELECT fornavn, etternavn, farge 
				FROM Medlem
				JOIN Gradering 
				ON Medlem_idMedlem = Gradering.Medlem_idMedlem 
				JOIN Beltegrad 
				ON Gradering.Beltegrad_idBeltegrad = Beltegrad.idBeltegrad
				order by fornavn asc";

			if($results = $connection->query($sql))
			{

			}
			else
			{
				echo("Feil i brukerinput: " . mysqli_error($connection));
			}

			echo("
				<table>
					<tr>
						<th>Fornavn</th>
						<th>Etternavn</th> 
						<th>Grad</th>
					</tr>

					");
		
		$sistenavn="";
				while($row = $results->fetch_assoc())
				{
					$fornavn = $row['fornavn'];
					$etternavn = $row['etternavn'];
					$grad = $row['farge'];
		if($sistenavn!=$fornavn)
		{
			echo("
							<tr>
								<td>$fornavn</td>
								<td>$etternavn</td>
								<td>$grad</td>
							</tr>
							");
		}
					
					$sistenavn=$fornavn;
				}

				echo("

				</table>
			");


		?>
		
	</div>
	
</body>
</html>