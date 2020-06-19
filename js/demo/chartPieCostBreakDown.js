var ctx = document.getElementById("chartpiecost");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Marketing", "Sales"],
    datasets: [{
      data: [55, 30],
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
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