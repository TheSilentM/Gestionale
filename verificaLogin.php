<?php 

	
	if(isset($_POST["username"])) {
		$username = $_POST["username"];
	} else {
		$username="";
	};
	
	if (isset($_POST["password"])) {
		$password = $_POST["password"];
	} else {
		$password="";
	};
	
	
	
	$host = "localhost";
	$user = "root";
	$passwd = "";
	$db = "gestionale";
	
	$connessione = mysqli_connect($host, $user, $passwd, $db);
	
	if (mysqli_connect_errno()) {
		echo "Connessione fallita ".die(mysqli_connect_error()); 
	}
	
	$query = "SELECT utenti.username, utenti.password FROM utenti";
	
	$risultato = mysqli_query($connessione, $query);
	
	if (mysqli_num_rows($risultato)!=0) {
		
		while($row = mysqli_fetch_array($risultato, MYSQLI_ASSOC)) {
			if ($row["username"] == $username && $row["password"] == $password) {
				header("location: dashboard.php");
			} else {
				echo "Credenziali non corrette";
			}
		}
	}



?>