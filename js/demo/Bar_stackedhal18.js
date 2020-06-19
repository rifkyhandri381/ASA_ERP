var ctx = document.getElementById('chart2');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["-25","26-30","26-40","46-54","-55"],
    datasets: [
      {
        label: 'Voluntary Loss',
        data: ['20','89','90','10','20','30'],
        backgroundColor: '#000033',
      },
      {
        label: 'Involuntary Loss',
        data: ['27','80','10','67.8','89','90'],
        backgroundColor: '#6666ff',
      },
     
    ]
  },
  options: {
   
    title: {
      display: true,
      text: 'Turn Over by Age Group',
      
  },
    legend: {
      display: true,
      position : 'bottom',
      labels:  {
         
      }
  },
    scales: {
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: true }]
    }
  }
});


 
