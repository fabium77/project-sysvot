options = {
    chart:{
        height:380,
        type:"bar",
        toolbar:{
            show:!1
        }
    },
    plotOptions:{
        bar:{
            horizontal:!1,
            endingShape:"rounded",
            columnWidth:"55%"
        }
    },
    dataLabels:{
        enabled:!1
    },
    stroke:{
        show:!0,
        width:2,
        colors:["transparent"]
    },
    colors:["#3bafda","#1abc9c","#CED4DC"],
    series:[
        {
            name:"Frente de Todos",
            data:[0,0,0,0,0]
        },
        {
            name:"Juntos por el cambio",
            data:[0,0,0,0,0]
        },
        {
            name:"GEM",
            data:[0,0,0,0,0]
        },
        {
            name:"Consenso Federal",
            data:[0,0,0,0,0]
        }
    ],
    xaxis:{
        categories:["Gobernador","Diputados","Senadores","Intendente","Concejales"]
    },
    legend:{
        offsetY:-10
    },
    yaxis:{
        title:{
            text:"(%)Porcentaje"
        }
    },
    fill:{
        opacity:1
    },
    grid:{
        row:{
            colors:["transparent","transparent"],
            opacity:0.2
        },
        borderColor:"#f1f3fa"
    },
    tooltip:{
        y:{
            formatter:function(e){
                return e +"%";
            }
        }
    }
};
(chart = new ApexCharts(document.querySelector("#apex-column-1"),options)).render();





var options = {
    chart: {
        height: 220,
        width: 220,
        bottom: 0,
        margin: 0,
        type: 'radialBar',
        offsetY: -20,
        offsetX: -45,
        left:0,

    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#e7e7e7",
                strokeWidth: '97%',
                margin: 0, // margin is in pixels
                shadow: {
                    enabled: true,
                    top: 2,
                    left: 0,
                    color: '#999',
                    opacity: 1,
                    blur: 2
                }
            },
            dataLabels: {
                name: {
                    show: false
                },   
                value: {
                    offsetY: -2,
                    fontSize: '18px'
                }                     
            }
        }
    },
    fill: {

    },
    series: [0],
    labels: ['Average Results'],
   
}

var chart2 = new ApexCharts(
    document.querySelector("#porcentaje-lista-506"),
    options
);

(chart2 = new ApexCharts(document.querySelector("#porcentaje-lista-506"),options)).render();

//chart2.render();


var options = {
    chart: {
        height: 220,
        width: 220,
        bottom: 0,
        margin: 0,
        type: 'radialBar',
        offsetY: -20,
        offsetX: -45,
        left:0,

    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#e7e7e7",
                strokeWidth: '97%',
                margin: 0, // margin is in pixels
                shadow: {
                    enabled: true,
                    top: 2,
                    left: 0,
                    color: '#999',
                    opacity: 1,
                    blur: 2
                }
            },
            dataLabels: {
                name: {
                    show: false
                },   
                value: {
                    offsetY: -2,
                    fontSize: '18px'
                }                     
            }
        }
    },
    fill: {

    },
    series: [0],
    labels: ['Average Results'],
   
}

var chart3 = new ApexCharts(
    document.querySelector("#porcentaje-lista-503"),
    options
);

chart3.render();


var options = {
    chart: {
        height: 220,
        width: 220,
        bottom: 0,
        margin: 0,
        type: 'radialBar',
        offsetY: -20,
        offsetX: -45,
        left:0,

    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#e7e7e7",
                strokeWidth: '97%',
                margin: 0, // margin is in pixels
                shadow: {
                    enabled: true,
                    top: 2,
                    left: 0,
                    color: '#999',
                    opacity: 1,
                    blur: 2
                }
            },
            dataLabels: {
                name: {
                    show: false
                },   
                value: {
                    offsetY: -2,
                    fontSize: '18px'
                }                     
            }
        }
    },
    fill: {

    },
    series: [0],
    labels: ['Average Results'],
   
}

var chart4 = new ApexCharts(
    document.querySelector("#porcentaje-lista-69"),
    options
);

chart4.render();

var options = {
    chart: {
        height: 220,
        width: 220,
        bottom: 0,
        margin: 0,
        type: 'radialBar',
        offsetY: -20,
        offsetX: -45,
        left:0,

    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#e7e7e7",
                strokeWidth: '97%',
                margin: 0, // margin is in pixels
                shadow: {
                    enabled: true,
                    top: 2,
                    left: 0,
                    color: '#999',
                    opacity: 1,
                    blur: 2
                }
            },
            dataLabels: {
                name: {
                    show: false
                },   
                value: {
                    offsetY: -2,
                    fontSize: '18px'
                }                     
            }
        }
    },
    fill: {

    },
    series: [0],
    labels: ['Average Results'],
   
}

var chart5 = new ApexCharts(
    document.querySelector("#porcentaje-lista-504"),
    options
);

chart5.render();


var options = {
    chart: {
        height: 180,
        width: 180,
        bottom: 0,
        margin: 0,
        type: 'radialBar',
        offsetY: -20,
        offsetX: -45,
        left:0,

    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#e7e7e7",
                strokeWidth: '97%',
                margin: 0, // margin is in pixels
                shadow: {
                    enabled: true,
                    top: 2,
                    left: 0,
                    color: '#999',
                    opacity: 1,
                    blur: 2
                }
            },
            dataLabels: {
                name: {
                    show: false
                },   
                value: {
                    offsetY: -2,
                    fontSize: '18px'
                }                     
            }
        }
    },
    fill: {

    },
    series: [0],
    labels: ['Average Results'],
    colors:["#675db7"],
   
}

var chart6 = new ApexCharts(
    document.querySelector("#porcentaje-participacion"),
    options
);

chart6.render();


var options = {
    chart: {
        height: 180,
        width: 180,
        bottom: 0,
        margin: 0,
        type: 'radialBar',
        offsetY: -20,
        offsetX: -45,
        left:0,

    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: "#e7e7e7",
                strokeWidth: '97%',
                margin: 0, // margin is in pixels
                shadow: {
                    enabled: true,
                    top: 2,
                    left: 0,
                    color: '#999',
                    opacity: 1,
                    blur: 2
                }
            },
            dataLabels: {
                name: {
                    show: false
                },   
                value: {
                    offsetY: -2,
                    fontSize: '18px'
                }                     
            }
        }
    },
    fill: {

    },
    series: [0],
    labels: ['Average Results'],
    colors:["#23b397"],
   
}

var chart7 = new ApexCharts(
    document.querySelector("#porcentaje-mesasEscrutadas"),
    options
);

chart7.render();