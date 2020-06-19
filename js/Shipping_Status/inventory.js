var ctx = document.getElementById("barpie").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["electronic", "Computer", "Automotiv", "Apliances"],
        datasets: [{
            label: '# of Votes',
            data: [40,20,10,30],
            backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235,1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
           
            ],
            borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
          
            ],
            borderWidth: 1
        }]
    },
    
});
