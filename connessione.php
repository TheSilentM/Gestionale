<?php 

	$host = "localhost";
	$user = "root";
	$passwd = "";
	$db = "gestionale";
	
	$connessione = mysqli_connect($host, $user, $passwd, $db);
	
	if (mysqli_connect_errno()) {
		echo "Connessione fallita ".die(mysqli_connect_error()); 
	}

?>