<?php 

	require_once('connessione.php');
	
	if(isset($_POST['IDProdotto'])) {
		$id_prodotto = $_POST['IDProdotto'];
	}
	if(isset($_POST['quantita'])) {
		$quantita = $_POST['quantita'];
	}
	
	if($id_prodotto!='' && $quantita!='') {
		$query = "UPDATE magazzino SET quantita = quantita - $quantita WHERE magazzino.IDProdotto = '$id_prodotto'";
		
		mysqli_query($connessione, $query);
		
		header('location: magazzino_remove.php');
	}

?>