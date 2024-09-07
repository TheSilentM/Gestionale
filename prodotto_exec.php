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
	
	//qui noi dovremmo effettuare i controlli sulla sicurezza
	
	
if($descrizione!=='' && $idProdotto!=='' && $prezzo_unitario!=='' && $idCategoria!==''){	
	$query = "INSERT INTO prodotti (descrizione, IDProdotto, prezzo_unitario, IDCategoria) VALUES ('$descrizione', '$idProdotto', '$prezzo_unitario', '$idCategoria')";
	
	//Esecuzione della query
	mysqli_query($connessione, $query);
	
	//Chisura della connessione
	header('location: prodotto_add.php');

}

?>	