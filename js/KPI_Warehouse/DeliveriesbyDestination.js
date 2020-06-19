var ctx = document.getElementById('DeliveriesbyDestination');

var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Germany","France","Switzerlend","Austria"],
    datasets: [
      {
        label: 'Warehouse Operating Cost',
        data: ['20','30','50','20','10'],
        backgroundColor: ['#cc0000','#ff0000','#ff3333','#ff6666']
      },
      
    ]
  },
  options: {
   
    title: {
      display: true,
      text: 'WareHouse Operating Cost',
      color : '#000033',
      
  },
    legend: {
      display: true,
      position : 'right',
      fontcolor : '#000033',
      labels:  {
       
      }
  },
    
  }
});
