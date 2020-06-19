// 
var myChart = echarts.init(document.getElementById('POR2'));

// specify chart configuration item and data
var option = {
    
    tooltip: {  formatter: '{a} <br/>{b} : {c}%'},
    legend: {
        data:['Sales']
    },
    series: [
        {
            name: 'data',
            type: 'pie',
            radius: '55%',
            center: ['50%', '50%'],
            data: [
                {value: 335, name: 'Transportasion'},
                {value: 310, name: 'Warehousing Cost'},
                {value: 274, name: 'Inventory Carrying Costs'},
                {value: 235, name: 'Administrative Cost'},
                {value: 400, name: 'Order Processing Cost'}
            ].sort(function (a, b) { return a.value - b.value; }),
            roseType: 'radius',
            label: {
                color: 'rgba(255, 255, 255, 0.3)'
            },
            labelLine: {
                lineStyle: {
                    color: 'rgba(255, 255, 255, 0.3)'
                },
                smooth: 0.2,
                length: 10,
                length2: 20
            },
            itemStyle: {
                color: '#c23531',
                
                shadowBlur: 200,
                shadowColor: 'rgba(0, 0, 0, 0.5)'
            },

            animationType: 'scale',
            animationEasing: 'elasticOut',
            animationDelay: function (idx) {
                return Math.random() * 200;
            }
        }
    ]
};


// use configuration item and data specified to show chart
myChart.setOption(option);

