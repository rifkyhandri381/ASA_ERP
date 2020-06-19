var ctx = document.getElementById('DeliveryStatus');

var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Time','null'],
    datasets: [
      {
        label: 'Within Time Limit',
        data: ['87','13'],
        backgroundColor: ['#ffff00','#ffffff']
      },
      
    ]
  },
  options: {
   
    title: {
      display: true,
      text: 'whitun time limit',
      color : '#000033',
      position : 'right',
      
  },
    legend: {
      display: false,
      position : 'right',
      fontcolor : '#000033',
      labels:  {
       
      }
  },
    
  }
});
