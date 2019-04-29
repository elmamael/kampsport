
<?php
	session_start();
	

	
	if(!isset($_SESSION['lang']) || empty($_GET['lang'])){
            $_SESSION['lang'] = 'no';
        }
        else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang']){
            $_SESSION['lang'] = 'en';   
       }


	
	
	require_once("Languages/" . $_SESSION['lang'] . ".php");
?>

