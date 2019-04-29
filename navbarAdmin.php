<?php
	session_start();

	// Set Language variable
	if(isset($_GET['lang']) && !empty($_GET['lang'])){
	 $_SESSION['lang'] = $_GET['lang'];

	 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
	  echo "<script type='text/javascript'> location.reload(); </script>";
	 }
	}

	// Include Language file
	if(isset($_SESSION['lang'])){
	 include "lang_".$_SESSION['lang'].".php";
	}else{
	 include "lang_en.php";
	}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<!--Navbar -->
	<ul>
	  <a href=""><img id="logo" src="src/Logo.jpg" alt=""></a>
	  <li><a href="#home"><?= _HOME ?></a></li>
	  <li><a href="InfoMedlemer.php"><?= _INFOM ?></a></li>
	  <li><a href="OppdaterOgSlett.php"><?= _UPDATE ?></a></li>
	  <li><a href="Registrering.php"><?= _REGISTER ?></a></li>
	  <li><a href="NyheterAdmin.php"><?= _NEWS ?></a></li>
	</ul>
	<!--Navbar end -->
	
	
	
	<!--Navbar -->
	<!--<ul>
	  <a href=""><img id="logo" src="src/Logo.jpg" alt=""></a>
	  <li><a href="AdminSide.php">Home</a></li>
	  <li><a href="InfoMedlemer.php">Info Medlemmer</a></li>
	  <li><a href="OppdaterOgSlett.php">Oppdater og slett</a></li>
	  <li><a href="Registrering.php">Register nye elever</a></li>
	  <li><a href="NyheterAdmin.php">Legg til nyheter</a></li>
	</ul>-->
	<!--Navbar end -->
	
</body>
</html>