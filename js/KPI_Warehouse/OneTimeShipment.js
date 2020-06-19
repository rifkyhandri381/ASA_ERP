var ctx = document.getElementById('ON_Time_Shipment');

var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Time','null'],
    datasets: [
      {
        label: 'Within Time Limit',
        data: ['87','13'],
        backgroundColor: ['#cc0000','#ffffff']
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
