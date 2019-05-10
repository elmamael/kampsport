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
		include 'navbarAdmin.php'
	?>
	<!--Navbar end -->
	
	<div class="content">
	Hello
	hei
	
	<a href="InfoMedlemer.php">Info medlemmer</a>
	<a href="OppdaterOgSlett.php">Oppdater og slett</a>
		
	</div>
</body>
</html>