// 
var myChart = echarts.init(document.getElementById('POR1'));

// specify chart configuration item and data
var option = {
    
    tooltip: {  formatter: '{a} <br/>{b} : {c}%'},
    legend: {
        data:['Sales']
    },
    series: [{
    
        name: 'profit',
        type: 'gauge',
        detail: {formatter: '{value}%'},
        data: [{value: 92.5, name: 'Profit'}],
       
    }]
};


// use configuration item and data specified to show chart
myChart.setOption(option);

// coba
