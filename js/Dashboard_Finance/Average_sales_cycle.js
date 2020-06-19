var ctx = document.getElementById('LineAverage');

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Senin','Selasa','Rabu','Kamis',"jum'at","sabtu","minggu",
    'Senin','Selasa','Rabu','Kamis',"jum'at","sabtu","minggu",
    'Senin','Selasa','Rabu','Kamis',"jum'at","sabtu","minggu"],
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
  
    text: '18 days Average Sales Cycle Length',
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
      xAxes: [{ stacked: false }],
      yAxes: [{ stacked: false }]
    }
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };
