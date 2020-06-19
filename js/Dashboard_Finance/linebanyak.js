var ctx = document.getElementById('linebanyak');

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['januari','februari','maret','mei','juni'],
    datasets: [
      {
        label: '1',
        data: ['70','20','60','20','10','40'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
      },
      {
        label: '2',
        data: ['62','99','10','20','30','40'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
      },
      {
        label: '3',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
      },
      {
        label: '4',
        data: ['20.7','80','10','67.8','89','90'],
        backgroundColor: 'rgba(255, 0, 0, 0)',
        borderColor: 'rgba(255, 0, 0, 1)',
        borderDash: [2,2], 
      },
     
    ]
  },
  options: { 
    responsive: true,
	maintainAspectRatio: true,
	animation: {
		easing: 'easeInOutQuad',
		duration: 520
	},
    title: {
    display: true,
    text: 'Revenue Per Sales Rep',
    fontColor: 'black'
},  elements: {
    rectangle: {
      borderSkipped: 'left',
    }
  },
      legend : {
          position: 'bottom',
          display: true,
          position: 'right',
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

var ctx = document.getElementById('linebanyak1');

var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['1','2','3','4','5','6'],
    datasets: [
      {
        label: '1',
        data: ['70','20','60','20','10','40'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
      },
      {
        label: '2',
        data: ['62','99','10','20','30','40'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
      },
      {
        label: '3',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: 'rgba(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
      },
      {
        label: '4',
        data: ['20.7','80','10','67.8','89','90'],
        backgroundColor: 'rgba(255, 0, 0, 0)',
        borderColor: 'rgba(255, 0, 0, 1)',
        borderDash: [2,2], 
      },
     
    ]
  },
  options: { title: {
    display: true,
    text: 'Profit margin per sales REP',
    fontColor: 'black'
},  elements: {
    rectangle: {
      borderSkipped: 'left',
    }
  },
      legend : {
          position: 'bottom',
          display: true,
          position: 'right',
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


var ctx = document.getElementById('linebanyak2');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Januari2020','Februari2020','Maret2020','Mei2020','Juni2020','Juli2020','Agustus2020'],
    datasets: [
   
      {
        type: 'line',
        label: 'Target',
        data: ['100','200','300','400','500','600'],
        backgroundColor: 'rgba(255, 0, 0,0)',
        borderColor: 'rgba(255, 0, 0,1)',
        pointRadius: 0,
        pointHoverRadius: 0,
        lineTension: 0,
        fill: false,
        backgroundColor: 'transparent',
        borderDash: [2,2], 
        pointBackgroundColor: 'rgba(255, 0, 0,1)',
        pointRadius: 0,
        pointHoverRadius: 10,
        pointHitRadius: 30,
        pointBorderWidth: 2,
        pointStyle: 'rectRounded'
        
      },
      {
        type : 'bar',
      label: 'Revenue',
      data: ['100','200','250','300','350','400'],
      backgroundColor: 'rgba(0, 51, 204,1)',
      
      
    },
     
    ]
  },
  options: { title: {
    display: true,
    text: 'REVENUE',
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
      xAxes: [{ stacked: false }],
      yAxes: [{ stacked: false }]
    }
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };

var ctx = document.getElementById('lineoke');

var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Januari2020','Februari2020','Maret2020','Mei2020','Juni2020','Juli2020','Agustus2020'],
    datasets: [
      {
          type : 'line',
        label: 'Revenue',
        data: ['67.8','89','90','10','20','30'],
        backgroundColor: 'rgb(51, 204, 51,0)',
        borderColor: 'rgba(51, 204, 51,1)',
        pointBackgroundColor: 'rgba(51,204,51,1)',
        pointRadius: 3,
      },
      
      {
        type: 'line',
        label: 'Target',
        data: ['100','200','300','400','500','600'],
        backgroundColor: 'rgba(255, 0, 0,0)',
        borderColor: 'rgba(255, 0, 0,1)',
        pointRadius: 0,
        pointHoverRadius: 0,
        lineTension: 0,
        fill: false,
        backgroundColor: 'transparent',
        borderDash: [2,2], 
        pointBackgroundColor: 'rgba(255, 0, 0,1)',
        pointRadius: 0,
        pointHoverRadius: 10,
        pointHitRadius: 30,
        pointBorderWidth: 2,
        pointStyle: 'rectRounded'
        
      },
      {
        type : 'bar',
      label: 'Revenue',
      data: ['100','200','250','300','350','400'],
      backgroundColor: 'rgba(0, 51, 204,1)',
      
      
    },
     
    ]
  },
  options: { title: {
    display: true,
    text: 'REVENUE',
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
      xAxes: [{ stacked: false }],
      yAxes: [{ stacked: false }]
    }
  }
});
//   var chartOptions = {
//     legend: {
    //     }
//   };