var ctx = document.getElementById('EarningTax');

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Suplier1','Suplier2','Suplier3','Suplier4','Suplier5','Suplier6'],
    datasets: [
      {
        label: 'EBT Actual',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
      },
      {
        label: 'EBT Target',
        data: ['20.7','80','10','67.8','89','90'],
        backgroundColor: 'rgba(255, 0, 0, 0)',
        borderColor: 'rgba(255, 0, 0, 1)',
        borderDash: [2,2], 
      },
     
    ]
  },
  options: { title: {
    display: true,
    text: 'Earning Before Interest and Taxes',
    fontColor: 'black'
},  elements: {
    rectangle: {
      borderSkipped: 'left',
    }
  },
      legend : {
          position: 'bottom',
          display: true,
          position: 'right',
          labels: {
            boxWidth: 40,
            fontColor: 'black'
          }
    
      },
    scales: {
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: true }]
    }
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };