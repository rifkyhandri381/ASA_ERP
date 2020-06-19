var ctx = document.getElementById('chartpie1');

var chart1 = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["man","woman"],
    datasets: [
      {
        label: 'Voluntary Loss',
        data: ['20','30'],
        backgroundColor: ['#000033','#aaaaaa']
      },
      
    ]
  },
  options: {
   
    title: {
      display: true,
      text: 'Turn Over by Age Group',
      color : '#000033',
      
  },
    legend: {
      display: true,
      position : 'bottom',
      fontcolor : '#000033',
      labels:  {
       
      }
  },
    
  }
});



var ctx = document.getElementById('chartpie2');

var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["junior","mid lever","senior"],
    datasets: [
      {
        label: 'Voluntary Loss',
        data: ['43','25','32'],
        backgroundColor: ['#000033','#aaaaaa']
      },
      
    ]
  },
  options: {
   
    title: {
      display: true,
      text: 'AVG Cost Of Hiring By Seniority Level',
      color : '#000033',
      
  },
    legend: {
      display: true,
      position : 'bottom',
      fontcolor : '#000033',
      labels:  {
       
      }
  },
    
  }
});




