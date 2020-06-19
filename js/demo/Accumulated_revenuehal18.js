
var ctx = document.getElementById("SKDAccumulatedRevenue").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Previouse","New ","Upsale","Lost ","Curent"],
        datasets: [{
            label: 'revenue',
            lineTension: 0.1,
      backgroundColor: "rgba(0, 77, 0, 1)",
      borderColor: "rgba(0, 77, 0, 1)",
      pointRadius: 0,
      pointBackgroundColor: "#ff1a1a",
      pointBorderColor: "#ff1a1a",
      pointHoverRadius: 0,
      pointHoverBackgroundColor:  "#ff1a1a",
      pointHoverBorderColor:  "#ff1a1a",
      pointHitRadius: 10,
      pointBorderWidth: 2,
            data: [120, 190, 300, 230, 200],
       
          
            
  
         
        },
       
    ]
    },
    options: {
        xAxes : false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:false
                }
            }]
        }
    },legend: {
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
            return datasetLabel + ': m' + number_format(tooltipItem.yLabel);
          }
        }
      },gridLines: {
        color: "rgb(234, 236, 244)",
        zeroLineColor: "rgb(234, 236, 244)",
        drawBorder: false,
        borderDash: [-1],
        zeroLineBorderDash: [2]
      }
   ,
 
      
});