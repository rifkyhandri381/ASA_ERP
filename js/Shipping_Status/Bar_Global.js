var ctx = document.getElementById("bar4").getContext("2d");
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ["NA", "EUR", "Asia", "SA"],
		datasets: [{
			label: 'Cash to Cash Cycle Time',
			data: [12, 19, 3, 23],
			backgroundColor: 'rgba(288, 99, 132, 1)',	
			borderColor: 
			'rgba(288, 99, 132, 1)',
		    borderWidth: 1
        },
        {
			label: 'Account Req Days',
			data: [12, 19, 3, 23],
			backgroundColor: 'rgba(123, 99, 132,1)',	
			borderColor: 
			'rgba(123, 99, 132,1)',
		    borderWidth: 1
        },
        {
			label: 'Inventory Days',
			data: [12, -2, 3, 4],
			backgroundColor: 'rgba(0,158,115,1)',	
			borderColor: 
            'rgba(0,158,115,1)',
		    borderWidth: 1
        },
        {
			label: 'Accounts Payable days',
			data: [12, -2, 3, 4],
			backgroundColor: 'rgba(300,0,0,1)',	
			borderColor: 
			'rgba(300,0,0,1)',	
		    borderWidth: 1
		}]
	},
	options: {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true
				}
			}]
		}
	}
});