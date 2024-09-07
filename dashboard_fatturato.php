
	<script>

		(() => {

			// Graphs
			const ctx = document.getElementById('fatturatoYear')
			// eslint-disable-next-line no-unused-vars
			const myChart = new Chart(ctx, {
			type: 'line',
				data: {
				labels: [<?php require_once('connessione.php');
							$query = "SELECT SUBSTRING(magazzino.data, 1, 4) AS data FROM magazzino";
							$risultato = mysqli_query($connessione, $query);
							while($row = mysqli_fetch_array($risultato)){
								echo $row['data'].", ";
							}?>],
			datasets: [{
				data: [<?php require_once('connessione.php');
							$query = "SELECT magazzino.quantita FROM magazzino";
							$risultato = mysqli_query($connessione, $query);
							while($row = mysqli_fetch_array($risultato)){
								echo $row['quantita'].", ";
							}?>],
				lineTension: 0,
				backgroundColor: 'transparent',
				borderColor: '#007bff',
				borderWidth: 4,
				pointBackgroundColor: '#007bff'
			}]
		},
			options: {
			plugins: {
				legend: {
				display: false
			},
			tooltip: {
			boxPadding: 3
				}
			}
		}
	})
})()</script>

