
<?php

require_once('connessione.php');


	$query = "SELECT magazzino.quantita, categorie.nomeCategoria FROM magazzino, categorie";
	$risultato = mysqli_query($connessione, $query);
	while($row = mysqli_fetch_array($risultato)){
		$quantity = $row['quantita'].", ";
		$nomeCat = $row['nomeCategoria'].", ";

	$dataPoints = array(
		"y" => $quantity, "label" => $nomeCat
		);
	};
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</body>
</html> 