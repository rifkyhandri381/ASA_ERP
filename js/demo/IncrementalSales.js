
var ctx = document.getElementById("SKDIncrementalSales").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Email", "Google", "Instgram", "Facebook", "Twiter"],
        datasets: [{       
            label : "hilangkan",
            lineTension: 0.1,
      backgroundColor:["#003300","#004d00","#006600","#008000","#009900","#00b300"],
      borderColor: "rgba(77, 255, 77,1)",
      pointRadius: 0,
      pointBackgroundColor: "#ff1a1a",
      pointBorderColor: "#ff1a1a",
      pointHoverRadius: 0,
      pointHoverBackgroundColor:  "#ff1a1a",
      pointHoverBorderColor:  "#ff1a1a",
      pointHitRadius: 10,
      pointBorderWidth: 2,
            data: [130, 200, 310, 240, 210, 300,400,600,700,200,100,190,210,200,300,450,600,700,780,100],
       
          
            
  
         
        }
    ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    },legend: {
        display: false
      }, yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value)+'$' ;
          }
        },
        
      }],
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
      },gridLines: {
        color: "rgb(234, 236, 244)",
        zeroLineColor: "rgb(234, 236, 244)",
        drawBorder: false,
        borderDash: [2],
        zeroLineBorderDash: [2]
      }
   ,
  
      
});