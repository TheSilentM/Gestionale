<?php 

	require_once('connessione.php');
	
	if(isset($_POST['IDProdotto'])) {
		$id_prodotto = $_POST['IDProdotto'];
	}
	if(isset($_POST['id_cliente'])) {
		$id_cliente = $_POST['id_cliente'];
	}
	if(isset($_POST['IDUtente'])) {
		$id_utente = $_POST['IDUtente']; 
	}
	if(isset($_POST['stato'])) {
		$stato = $_POST['stato']; 
	}
	
	if($id_prodotto!='' && $id_cliente!='' && $id_utente!='' && $stato!='') {
		$query = "INSERT INTO preventivi (id, IDUtente, id_cliente, IDProdotto, quantita, data, stato) VALUES (NULL, $id_utente, $id_cliente, '$id_prodotto', (SELECT magazzino.quantita FROM magazzino WHERE magazzino.IDProdotto = '$id_prodotto'), (SELECT magazzino.data FROM magazzino WHERE magazzino.IDProdotto = '$id_prodotto'), $stato)";
		
		$result = mysqli_query($connessione, $query);
		header('location: creazione_preventivo.php');
	} else {
		echo "Immetti dei dati validi";
	}

?>