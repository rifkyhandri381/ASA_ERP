var ctx = document.getElementById('Suplier_Defect_Rate.js');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Suplier1','Suplier2','Suplier3','Suplier4','Suplier5','Suplier6'],
    datasets: [
      {
        label: 'Rejected',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: '#666699',
      },
      {
        label: 'Impected',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: '#ff1a1a',
      },
      {
        label: 'No impact',
        data: ['20.7','80','10','67.8','89','90'],
        backgroundColor: '#33cc33',
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
      yAxes: [{ 
          stacked: true ,
          display : false  
        
    }]
    }
  }
});