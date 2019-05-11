<?php
	
	//Tilkoblingsinformasjon
	$server = "elevweb.akershus-fk.no";
	$user = "Toel1108";
	$password = "1234EE";
	$databaseName = "Toel1108_kampsport";

	
	//Opprette en kobling
	$connection = new MySQLi($server, $user, $password, $databaseName);
		
	if($connection -> connect_error)
	{
		die("Connection failed ".$connection->connect_error);
	}
			
	/*
	else
	{
		echo("Connection Successfull<br>");
	}
	*/
	//Angi Tegnsett UTF-8
	$connection->set_charset("utf8");
?>