var ctx = document.getElementById('ChartBar_Suplier_Perfomance_Indikator');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Suplier1','Suplier2','Suplier3','Suplier4','Suplier5','Suplier6'],
    datasets: [
      {
        label: 'Unlisted Suplier',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: '#ff1a1a',
      },
      {
        label: 'Cntracted Suplier',
        data: ['20.7','80','10','67.8','89','90'],
        backgroundColor: '#1a1aff',
      },
     
    ]
  },
  options: { title: {
    display: true,
    text: 'Number of Supliers By Years'
},
      legend : {
          position: 'bottom'
      },
    scales: {
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: true }]
    }
  }
});