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
				<tr><td><div><input type="text" name="etternavn" placeholder="Nordmann"><br></div></td></tr>
				
				<tr><td><div><input type="submit" name="leggtil" value="Registrer elev" onclick="window.location.href='HPforside.php'"></div></td></tr>
				
			</form>
		</table>
	</div>
</body>
</html>