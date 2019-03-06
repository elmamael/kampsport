<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/MyStyleKamp.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
	
	<header>	
	<div class="navbar">
		<nav>
			<ul>				
				<li class="leftnav"><a href="Registrering.php">Registrering</a></li>
				<li class="leftnav"><a href="Timeplan.php">Timeplan</a></li>
				<li class="rightnav"><a href="">Konkuranser</a></li>
				<li class="rightnav"><a href="">Om oss</a></li>
			</ul>
		</nav>
		<div class="logo"><img src="src/Logo.jpg" alt="logo"></div>

	</div>
	</header>
	
	
	
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
				
				<tr><td><div>Belte:</div></td></tr>
				<tr><td><div><select name="belte">
						<option value="2">Hvitt</option>
						<option value="3">Gult</option>
						<option value="4">Oransje</option>
						<option value="5">Grønt</option>
						<option value="6">Blått</option>
						<option value="7">Brunt</option>
						<option value="8">Svart</option>
					
				<br></div></td></tr>
				
				<tr><td><div><input type="submit" name="leggtil" value="Registrer elev" onclick="window.location.href='IndexH.html'"></div></td></tr>
				
			</form>
		</table>
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
				$belte = $_POST["belte"];


				$sql = "INSERT INTO Medlem (fornavn, etternavn, kjonn, adresse, fodselsdato, tlf, belte) VALUES ('$fornavn', '$etternavn', '$kjonn', '$adresse', '$fodselsdato', '$tlf', '$belte');";

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
			}

		?>
</body>
</html>