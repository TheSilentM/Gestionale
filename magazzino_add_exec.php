<?php 

	require_once('connessione.php');
	
	if(isset($_POST['IDProdotto'])) {
		$id_prodotto = $_POST['IDProdotto'];
	}
	if(isset($_POST['quantita'])) {
		$quantita = $_POST['quantita'];
	}
	if(isset($_POST['data'])) {
		$data = $_POST['data'];
	}
	
	if($id_prodotto!='' && $quantita!='' && $data!='') {
		$query = "INSERT INTO magazzino (id, IDProdotto, quantita, data) VALUES (NULL, '$id_prodotto', '$quantita', '$data')";
		
		mysqli_query($connessione, $query);
		
		header('location: magazzino_add.php');
	}

?>