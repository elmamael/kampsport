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
	
	<!--Innhold på siden -->
	
	<div class="content">
		
		<h1>Medlemsinformasjon</h1>
	
		<?php
			$connection->set_charset("utf8");

			$sql = "SELECT fornavn, etternavn, farge, dato 
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
						<th>Grad Dato</th>
					</tr>

					");
		
		$sistenavn="";
				while($row = $results->fetch_assoc())
				{
					$fornavn = $row['fornavn'];
					$etternavn = $row['etternavn'];
					$grad = $row['farge'];
					$dato = $row['dato'];
					
					
		if($sistenavn!=$fornavn)
		{
			echo("
							<tr>
								<td>$fornavn</td>
								<td>$etternavn</td>
								<td>$grad</td>
								<td>$dato</td>
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