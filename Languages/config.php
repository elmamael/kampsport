<?php
	session_start();
	
	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "no";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) { 
		if ($_GET['lang'] == "no")
			$_SESSION['lang'] = "no";
		else if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
<<<<<<< HEAD

		
	require_once "Languages/" . $_SESSION['lang'] . ".php";

		}

	

	
=======
		}

	require_once "Languages/" . $_SESSION['lang'] . ".php";
>>>>>>> 207b9420d36a56c0ee35782533ceea7e6e0c1697
?>

