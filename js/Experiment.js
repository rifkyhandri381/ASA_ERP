var ctx = document.getElementById('Experiment');

var myChart = new Chart(ctx, {
  type: 'horizontalBar',
  data: {
    labels: ['Suplier1','Suplier2','Suplier3','Suplier4','Suplier5','Suplier6'],
    datasets: [
      {
        label: 'Unlisted Suplier',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: '#1a1aff',
      },
      {
        label: 'Cntracted Suplier',
        data: ['20.7','80','10','67.8','89','90'],
        backgroundColor: '#cc00cc',
      },
     
    ]
  },
  options: { title: {
    display: true,
    text: 'Number of Supliers By Years',
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
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: true }]
    }
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };