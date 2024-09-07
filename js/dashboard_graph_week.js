/* globals Chart:false */

(() => {
  'use strict'

  // Graphs
  const ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'Lunedì',
        'Martedì',
        'Mercoledì',
		'Giovedì',
		'Venerdì',
		'Sabato',
		'Domenica',
      ],
      datasets: [{
        data: [
          20339,
          30445,
          28483,
          18044,
          30995,
          28414,
		  29339,
        ],
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
})()