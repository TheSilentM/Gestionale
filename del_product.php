<?php 

	require_once('connessione.php');
	
	
	if(isset($_POST["id"])) {
		$idDaScegliere = $_POST["id"];
	}
	
	if($idDaScegliere!='') {
		$query = "DELETE FROM prodotti WHERE id=$idDaScegliere";
		
		//Esecuzione della query
		mysqli_query($connessione, $query);
	
		//Chisura della connessione
		header('location: delete_prodotto.php');
	}
	


?>