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

		}

	require_once "Languages/" . $_SESSION['lang'] . ".php";

?>

=======
		}

	require_once "Languages/" . $_SESSION['lang'] . ".php";
?>
>>>>>>> ac5fdaae7e82eb01fbec69d15650d6994be41a56
