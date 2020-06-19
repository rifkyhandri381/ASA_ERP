

    var myConfig = {
		type: 'bar',
		scrollX: {
		  bar: {
			backgroundColor: '#009999;',
			borderRadius: '5px',
			alpha: 0.2
		  },
		  handle: {
			backgroundColor: '#009999;',
			alpha: 0.5
		  }
		},
		scrollY: {
		  bar: {
			backgroundColor: '#009999;',
			borderRadius: '5px',
			alpha: 0.2
		  },
		  handle: {
			backgroundColor: '#009999;',
			alpha: 0.5
		  }
		},
		scaleX: {
		  zooming: true,
		  zoomTo: [0, 50],
		  item: {
			fontSize: 10
		  }
		},
		scaleY: {
		  zooming: true,
		  zoomTo: [0, 200],
		  values: '0:300:50',
		  guide: {
			lineStyle: 'dotted'
		  },
		  item: {
			fontSize: 10
		  }
		},
		plot: {
		  backgroundColor: '#009999',
		  barWidth: '50%'
		},
		series: [{
		  values: [
			138.2, 196.3, 153.6, 127.4, 114.1, 181.4, 131.1, 170.9, 154.4, 105.2,
			136.3, 180.4, 150.5, 135.3, 130.5, 164.3, 110.5, 127.2, 183.9, 191.3,
			184.8, 165.7, 102.4, 196.2, 179.1, 116.8, 175.2, 137.8, 100.9, 177.3,
			122.5, 123.1, 131.7, 109.4, 167.2, 142.7, 140.7, 165.5, 148.6, 181.2,
			108.7, 132.9, 161.9, 192.1, 134.5, 149.4, 183.9, 124.4, 114.4, 121.7,
			249.6, 224.3, 199.3, 151.4, 112.4, 213.5, 265.3, 239.5, 294.6, 284.4,
			279.2, 273.7, 233.7, 290.1, 228.2, 269.3, 208.4, 224.6, 235.1, 222.5,
			225.7, 257.2, 238.1, 262.5, 229.6, 269.7, 283.9, 236.2, 260.8, 255.2,
			258.1, 219.5, 292.4, 264.8, 251.7, 225.9, 206.5, 203.3, 258.2, 200.7,
			237.2, 208.1, 262.7, 292.8, 249.2, 242.6, 284.4, 246.7, 275.9, 274.5,
			234.2
		  ]
		}]
	  };
	   
	  zingchart.TOUCHZOOM = 'pinch';
	   
	  zingchart.render({
		id: 'Chartgua',
		data: myConfig,
		height: 400,
		width: '100%'
	  });
  
  