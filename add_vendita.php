<?php 

	require_once('connessione.php');
	
	if(isset($_POST['id_cliente'])) {
		$id_cliente = $_POST['id_cliente'];
	}
	if(isset($_POST['IDProdotto'])) {
		$id_prodotto = $_POST['IDProdotto'];
	}
	if(isset($_POST['IDUtente'])) {
		$id_utente = $_POST['IDUtente'];
	}
	//var_dump($_POST);

	if($id_cliente!='' && $id_prodotto!='' && $id_utente!='') {
	
	$query = "INSERT INTO vendite (id, id_cliente, IDUtente, IDProdotto) VALUES ('NULL', '$id_cliente', '$id_utente', '$id_prodotto')";
		
		mysqli_query($connessione, $query);
	
		header('location: vendite.php');
	}

?>