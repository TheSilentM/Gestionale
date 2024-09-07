<?php 

	require_once('connessione.php');
	
	if(isset($_POST['new-password'])) {
		$new_password = $_POST['new-password'];
	}
	/*if(isset($_POST['confirm-pass'])) {
		$confirm_password = $_POST['confirm-pass'];
	}*/
	if(isset($_POST['account'])) {
		$change_account = $_POST['account'];
	}
	
	if($new_password!='' && $change_account!='') {
		$query = "UPDATE utenti SET utenti.tipo_di_account = $change_account WHERE id=1";
		$result = mysqli_query($query, $connessione);
		header('location: account_settings.php');
	}
	

?>