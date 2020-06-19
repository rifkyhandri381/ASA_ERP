var ctx = document.getElementById("ChartPieProcement");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [ "Suplier"],
    datasets: [{
      data: [886],
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
      
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
        title: {
            display: true,
            text: '886 Suplier'
        },
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 1,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 50,
  },
});