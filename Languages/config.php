<?php
	session_start();
	
	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "no";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) { 
		if ($_GET['lang'] == "no")
			$_SESSION['lang'] = "no";
		else if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
<<<<<<< HEAD:Languages/config.php
		
	require_once "../Languages" . $_SESSION['lang'] . ".php";
=======
		}

	require_once("Languages/" . $_SESSION['lang'] . ".php");
>>>>>>> 04a256add07d241a5bf3b21e005361c8cfdf4139:config.php
	
?>

