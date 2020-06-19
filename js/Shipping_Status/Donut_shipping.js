var ctx = document.getElementById("donutin").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["admin","Storage","Service","Risk"],
        datasets: [{
            label: 'Sales',
            lineTension: 0.1,
      backgroundColor: ["#e600e6",
      "#00e600",
      "#0000ff",
      "#ff1a1a"],
      borderColor: ["#e600e6",
      "#00e600",
      "#0000ff",
      "#ff1a1a"],
      pointRadius: 3,
      pointBackgroundColor: "#ff1a1a",
      pointBorderColor: "#ff1a1a",
      pointHoverRadius: 3,
      pointHoverBackgroundColor:  "#ff1a1a",
      pointHoverBorderColor:  "#ff1a1a",
      pointHitRadius: 10,
      pointBorderWidth: 2,
            data: [120, 190, 300, 230],
       
          
            
  
         
        }]
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
      },gridLines: {
        color: "rgb(234, 236, 244)",
        zeroLineColor: "rgb(234, 236, 244)",
        drawBorder: false,
        borderDash: [2],
        zeroLineBorderDash: [2]
      }
   ,
  legend: {
    display: false
  }
      
});