<?php 

	require_once('connessione.php');
	
	if(isset($_POST['IDProdotto'])) {
		$id_prodotto = $_POST['IDProdotto'];
	}
	if(isset($_POST['id_cliente'])) {
		$id_cliente = $_POST['id_cliente'];
	}
	if(isset($_POST['IDUtente'])){
		$id_utente = $_POST['IDUtente'];
	}
	
	if($id_prodotto!='' && $id_cliente!='' && $id_utente!=''){
		$query = "INSERT INTO fatture (IDProdotto, descrizione, id_cliente, quantita, data, prezzo_totale) 
				  VALUES ( 
					'$id_prodotto', 
					(SELECT prodotti.descrizione FROM prodotti WHERE prodotti.IDProdotto = '$id_prodotto'), 
					'$id_cliente', 
					(SELECT magazzino.quantita FROM magazzino WHERE magazzino.IDProdotto = '$id_prodotto'),
					(SELECT magazzino.data FROM magazzino WHERE magazzino.IDProdotto = '$id_prodotto'),
					(SELECT prodotti.prezzo_unitario * magazzino.quantita AS prezzo_totale FROM prodotti INNER JOIN magazzino ON magazzino.IDProdotto = prodotti.IDProdotto WHERE prodotti.IDProdotto = '$id_prodotto')
				  )";

		$result = mysqli_query($connessione, $query);
		header("location: creazione_fatture.php");
	}

?>