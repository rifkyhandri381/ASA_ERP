

// Area Chart Example
var ctx = document.getElementById("TTQJ");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["1","2","3","4","5","6"],
    datasets: [{
      label: " Part-Time ",
      lineTension: 0.1,
      backgroundColor: "rgba(239, 89, 89, 0.7)",
      borderColor: "#808080",
      pointRadius: 3,
      pointBackgroundColor: "#808080",
      pointBorderColor: "#808080",
      pointHoverRadius: 3,
      pointHoverBackgroundColor:  "#808080",
      pointHoverBorderColor:  "#808080",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [10,20,30,40,50,90,100],
      
    }],
  },
  options: {
    title: {
      display: true,
      text: 'Time To Quit Job',
      fontcolor : "#000000"
      
  },
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 25,
        right: 25,
        top: 50,
        bottom:25
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'years'
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
          display : true,
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value)+'%' ;
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true,
      position : 'bottom',
      fontColor : '#dddfeb'
      
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
          return datasetLabel + number_format(tooltipItem.yLabel)+ ' %' ;
        }
      }
    }
  }
});
