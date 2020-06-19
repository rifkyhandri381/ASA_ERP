var ctx = document.getElementById('ChartAcquistionCostvsAveragehal21.js');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Januari2020','Februari2020','Maret2020','Mei2020','Juni2020','Juli2020','Agustus2020'],
    datasets: [
      {
          type : 'line',
        label: 'ARPU',
        data: ['90','190','240','290','500','600','700','800'],
        backgroundColor: 'rgb(51, 204, 51,0)',
        borderColor: 'rgba(0, 41, 51,1)',
        pointBackgroundColor: 'rgba(51,204,51,1)',
        pointRadius: 3,
      },
      {
        type : 'bar',
      label: 'Acquisition',
      data: ['100','200','250','300','350','400'],
      backgroundColor: 'rgba(179, 203, 203,1)',
      
      
    },
     
    ]
  },
  options: {
   
    title: {
        display: true,
        text: 'Acquisition Cost vs Average Revenue per User',
        fontColor: 'black'
    },
    maintainAspectRatio: false,
   
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      },labels :{
        fontColor : '#ffffff'
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 100,
      }],
      yAxes: [{ display: false},
         
        
        {
          gridLines:{
                display:false
          },
        ticks: {
          min: 0,
          max:1000,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value)+'$' ;
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
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + number_format(tooltipItem.yLabel) +': $' ;
        }
      }
    },
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };