var ctx = document.getElementById('chart');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Suplier1','Suplier2','Suplier3','Suplier4','Suplier5','Suplier6'],
    datasets: [
      {
        label: 'Unlisted Suplier',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: 'rgba(300,0,0,1)',
      },
      {
        label: 'Cntracted Suplier',
        data: ['20.7','80','10','67.8','89','90'],
        backgroundColor: 'rgba(0,158,115,1)',
      },
     
    ]
  },
  options: {
    scales: {
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: true }]
    }
  }
});


 
