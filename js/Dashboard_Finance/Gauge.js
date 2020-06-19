var ctx = document.getElementById('ChartGauge').getContext('2d');
var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'doughnut',

	// The data for our dataset
	data: {
		labels: ["Fleet 1", "Fleet 2", "Fleet 3"],
		datasets: [{
			label: "My First dataset",
			backgroundColor: ['green', 'red', 'yellow'],
			borderColor: '#fff',
			data: [5, 10, 5],
		}]
	},

	// Configuration options go here
	options: {
		circumference: 1 * Math.PI,
		rotation: 1 * Math.PI,
		cutoutPercentage: 90
	}
});
