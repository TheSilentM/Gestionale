<?php 

	require_once('connessione.php');
	
	if(isset($_POST['id'])) {
		$id_cliente = $_POST['id'];
	}
	
	if($id_cliente!='') {
		$query = "DELETE FROM clienti WHERE id=$id_cliente";
		
		mysqli_query($connessione, $query);
		
		header('location: clienti_delete.php');
	}


?>