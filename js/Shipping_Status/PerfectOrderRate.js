// 
var myChart = echarts.init(document.getElementById('POR'));

// specify chart configuration item and data
var option = {
    
    tooltip: {},
    legend: {
        data:['Sales']
    },
    xAxis: {
        data: ["Januari 2020", "Februari 2020", "Maret 2020", "Mei 2020", "Juni 2020", "Juli 2020","Agustus 2020","September 2020","Oktober 2020","November 2020","Desember 2020","Januari 2021","Februari 2021","Maret 2021","April 2021","Mei 2021"]
    },
    yAxis: {},
    series: [{
        name: 'Sales',
        type: 'line',
        data: [5, 20, 36, 10, 10, 20,20,30,40,50,60]
    }]
};

// use configuration item and data specified to show chart
myChart.setOption(option);
