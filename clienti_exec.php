<?php 

	require_once('connessione.php');
	
	if(isset($_POST["IDCliente"])){
		$idCliente = $_POST["IDCliente"];
	}
	if(isset($_POST["nome"])) {
		$nome = $_POST["nome"];
	}
	if(isset($_POST["cognome"])) {
		$cognome = $_POST["cognome"];
	}
	if(isset($_POST["email"])) {
		$email = $_POST["email"];
	}
	if(isset($_POST["tipoAccesso"])) {
		$tipoAccesso = $_POST["tipoAccesso"];
	}
	if(isset($_POST["indirizzo"])){
		$indirizzo = $_POST["indirizzo"];
	}
	if(isset($_POST["citta"])) {
		$citta = $_POST["citta"];
	}
	if(isset($_POST["CAP"])) {
		$CAP = $_POST["CAP"];
	}
	if(isset($_POST["cellulare"])) {
		$cellulare = $_POST["cellulare"];
	}

	if($idCliente!=='' && $nome!=='' && $cognome!=='' && $email!=='' && $tipoAccesso!=='' && $indirizzo!=='' && $citta!=='' && $CAP!=='' && $cellulare!=='') {
		$query = "INSERT INTO clienti (id_cliente, nome, cognome, tipo_di_accesso, indirizzo, citta, CAP, numero_telefonico, email) VALUES ('$idCliente', '$nome', '$cognome', '$tipoAccesso', '$indirizzo', '$citta', '$CAP', '$cellulare', '$email')";
		
		mysqli_query($connessione, $query);
		
		header('location: add_clienti.php');
	}

?>