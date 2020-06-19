var ctx = document.getElementById('LineAveragehal19');

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['1 juni 2020','2 juni 2020','3 juni 2020','4 juni 2020','5 juni 2020','6 juni 2020','7 juni 2020'
,'8 juni 2020','9 juni 2020','10 juni 2020','11 juni 2020','12 juni 2020','13 juni 2020','14 juni 2020','15 juni 2020'
,'16 juni 2020','17 juni 2020','18 juni 2020'],
    datasets: [
      {
        label: 'data',
        data: ['70','20','60','20','10','40','50','70','20','60','20','10','40','50','70','20','60','20','10','40','50'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: '#009999',
        lineTension: 0.1,
      }
     
    ]
  },
  options: { title: {
    display: true,
  
    text: '',
    fontColor: 'black'
},  elements: {
    rectangle: {
      borderSkipped: 'left',
    }
  },
      legend : {
          position: 'bottom',
          display: false,
          position: 'right',
          labels: {
            boxWidth: 40,
            fontColor: 'black'
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
              color: "rgb(234, 236, 244)",
              zeroLineColor: "rgb(234, 236, 244)",
              drawBorder: false,
              borderDash: [2,2],
              zeroLineBorderDash: [2]
            }
          }],
      xAxes: [{ stacked: false }],
      yAxes: [{ stacked: false }]
    }
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };
