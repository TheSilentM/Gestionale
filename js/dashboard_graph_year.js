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
        'Gennaio',
        'Febbraio',
        'Marzo',
		'Aprile',
		'Maggio',
		'Giugno',
		'Luglio',
        'Agosto',
        'Settembre',
		'Ottobre',
		'Novembre',
		'Dicembre'
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
          32445,
          22483,
          19044,
          30995,
          30414,
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