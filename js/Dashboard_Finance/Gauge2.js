var ctx = document.getElementById('ChartGauge1').getContext('2d');
var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'doughnut',

	// The data for our dataset
	data: {
		labels: ["Fleet 1"],
		datasets: [{
			label: "My First dataset",
			backgroundColor: ['green'],
			borderColor: '#fff',
			data: [10,2],
		}]
	},

	// Configuration options go here
	options: {
		circumference: 1 * Math.PI,
		rotation: 1 * Math.PI,
		cutoutPercentage: 90
	}
});
