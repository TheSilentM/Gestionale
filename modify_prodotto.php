<?php 

	require_once('connessione.php');
	
	if(isset($_POST["descrizioneProdotto"])){
	$descrizione = $_POST["descrizioneProdotto"];
	}
	if(isset($_POST["IDProdotto"])) {
		$idProdotto = $_POST["IDProdotto"];
	}
	if(isset($_POST["prezzoUnitario"])) {
		$prezzo_unitario = $_POST["prezzoUnitario"];
	}
	if(isset($_POST["IDCategoria"])) {
		$idCategoria = $_POST["IDCategoria"];
	}
	if(isset($_POST["id"])) {
		$idDaScegliere = $_POST["id"];
	}
	
	
	if($descrizione!=='' && $idProdotto!=='' && $prezzo_unitario!=='' && $idCategoria!=='' && $idDaScegliere!=='') {
		$query = "UPDATE prodotti SET id='$idDaScegliere', descrizione='$descrizione', IDProdotto='$idProdotto', prezzo_unitario='$prezzo_unitario', IDCategoria='$idCategoria' WHERE id='$idDaScegliere'";
		
		mysqli_query($connessione, $query);
		
		header('location: prodotto_mod.php');
	}
	
	
	
?>