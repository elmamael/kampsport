<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	include 'database.php';
	
	function slettRad($id) 
	{ 
		print("noe skjedde");
	}
	
	
	$connection->set_charset("utf8");

	$sql = "SELECT * FROM Medlem";
	
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
			<th>Født</th>
			<th>Alder</th>
		</tr>
		
		");
	while($row = $results->fetch_assoc())
	{
		$fornavn = $row['fornavn'];
		$etternavn = $row['etternavn'];
		$fAAr = $row['fødselsdato'];
		$alder = date("Y") - $fAAr;
		$ID_medlem = $row['idMedlem'];
		
	echo("
		<tr>
			<td>$fornavn</td>
			<td>$etternavn</td>
			<td>$fAAr</td>
			<td>($alder)</td>
			<td><a href='Update2.php?medlemID=$idMedlem'>Update</td>
			<td><form method='POST' action=''><button name='ID' method='POST' type='submit' value='$idMedlem'>Slett</button></form></td>
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
	
	
</body>
</html>