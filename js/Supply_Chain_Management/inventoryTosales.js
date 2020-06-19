var ctx = document.getElementById("ITS").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Januari 2020", "Februari 2020", "Maret 2020", "Mei 2020", "Juni 2020", "Juli 2020","Agustus 2020","September 2020","Oktober 2020","November 2020","Desember 2020","Januari 2021","Februari 2021","Maret 2021","April 2021","Mei 2021"],
        datasets: [{
            label: 'Sales',
            lineTension: 0.3,
      backgroundColor: "rgba(239, 89, 89, 0)",
      borderColor: "#009933",
      pointRadius: 0,
      pointBackgroundColor: "#009933",
      borderDash: [5, 5],
      pointBorderColor: "#009933",
      pointHoverRadius: 0,
      pointHoverBackgroundColor:  "#009933",
      pointHoverBorderColor:  "#009933",
      pointHitRadius: 10,
      pointBorderWidth: 2,
            data: [120, 190, 300, 230, 200, 300,400,600,700,200,100,190,210,200,300,450,600,700,780,100],
       
          
            
  
         
        }]
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