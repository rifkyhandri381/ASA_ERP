

// Area Chart Example
var ctx = document.getElementById("LineSuplierLeadTime");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Januari ", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: "Austria",
      lineTension: 0.1,
      backgroundColor: "rgba(239, 89, 89, 0)",
      borderColor: "rgba(110, 89, 89, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(110, 89, 89, 1)",
      pointBorderColor: "rgba(110, 89, 89, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor:  "rgba(110, 89, 89, 1)",
      pointHoverBorderColor:  "rgba(110, 89, 89, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [200,250,220,249,220,210,220,230,230,255,290,290],
    },
  ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value)+'%' ;
          }
        },
        gridLines: {
          color: "rgba(110, 89, 89, 1))",
          zeroLineColor: "rgba(110, 89, 89, 1)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
