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

		$sql = "SELECT fornavn, etternavn, farge 
			FROM Medlem
			JOIN Gradering 
			ON Medlem_idMedlem = Gradering.Medlem_idMedlem 
			JOIN Beltegrad 
			ON Gradering.Beltegrad_idBeltegrad = Beltegrad.idBeltegrad";

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
			while($row = $results->fetch_assoc())
			{
				$fornavn = $row['fornavn'];
				$etternavn = $row['etternavn'];
				$grad = $row['farge'];

				echo("
				<tr>
					<td>$fornavn</td>
					<td>$etternavn</td>
					<td>$grad</td>
				</tr>
				");
			}

			echo("

			</table>
		");

	
	?>
	
</body>
</html>