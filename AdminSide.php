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
	<h1>Velkommen</h1>
	På denne siden kan du gjøre endringer på nettsiden. Her kan du se informasjon om medlemmene, endre informasjon, registrere nye medlemmer og legge til nyheter
		
	</div>
</body>
</html>