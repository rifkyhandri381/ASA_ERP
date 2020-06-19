var ctx = document.getElementById('Revenuehal25');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Januari2020','Februari2020','Maret2020','Mei2020','Juni2020','Juli2020','Agustus2020'],
    datasets: [
      {
          type : 'line',
        label: 'Revenue',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: 'rgb(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
        pointBackgroundColor: 'rgba(51,204,51,1)',
        pointRadius: 3,
      },
      
      {
        type: 'line',
        label: 'Target',
        data: ['100','200','300','400','500','600'],
        backgroundColor: 'rgba(255, 0, 0,0)',
        borderColor: 'rgba(255, 0, 0,1)',
        pointRadius: 0,
        pointHoverRadius: 0,
        lineTension: 0,
        fill: false,
        backgroundColor: 'transparent',
        borderDash: [2,2], 
        pointBackgroundColor: 'rgba(255, 0, 0,1)',
        pointRadius: 0,
        pointHoverRadius: 10,
        pointHitRadius: 30,
        pointBorderWidth: 2,
        pointStyle: 'rectRounded'
        
      },
      {
        type : 'bar',
      label: 'Revenue',
      data: ['100','200','250','300','350','400'],
      backgroundColor: 'rgba(0, 51, 204,1)',
      
      
    },
     
    ]
  },
  options: { title: {
    display: true,
    text: 'REVENUE',
    fontColor: 'black'
},  elements: {
    rectangle: {
      borderSkipped: 'left',
    }
  },
      legend : {
          position: 'bottom',
          display: true,
          position: 'top',
          labels: {
            boxWidth: 40,
            fontColor: 'black'
          }
    
      },
    scales: {
      xAxes: [{ stacked: false }],
      yAxes: [{ stacked: false }]
    }
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };