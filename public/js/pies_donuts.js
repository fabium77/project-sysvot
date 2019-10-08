/* ------------------------------------------------------------------------------
 *
 *  # Echarts - Pie and Donut charts
 *
 *  Demo JS code for echarts_pies_donuts.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var EchartsPiesDonuts = function() {


    //
    // Setup module components
    //

    // Pie and donut charts
    var _piesDonutsExamples = function() {
        if (typeof echarts == 'undefined') {
            console.warn('Warning - echarts.min.js is not loaded.');
            return;
        }

        // Define elements
        var intendentexlista = document.getElementById('intendentexlista_chart');
        var intendentexfuerza = document.getElementById('intendentexfuerza_chart');

        //
        // Charts configuration
        //

        // Basic pie chart
        if (intendentexlista) {

            // Initialize chart
            var intendentexlista_chart = echarts.init(intendentexlista);


            //
            // Chart config
            //

            // Options
            intendentexlista_chart.setOption({

                // Colors
                color: [
                    '#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
                    '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
                    '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
                    '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
                ],

                // Global text styles
                textStyle: {
                    fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                    fontSize: 13
                },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(0,0,0,0.75)',
                    padding: [10, 15],
                    textStyle: {
                        fontSize: 13,
                        fontFamily: 'Roboto, sans-serif'
                    },
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    top: 'top',
                    left: 0,
                    data: ['69', '183', '210', '501 A', '501 B', '501 C', '501 D', '501 E', '504', '505', '506'],
                    itemHeight: 8,
                    itemWidth: 8
                },

                // Add series
                series: [{
                    name: 'Intendente por Lista',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '57.5%'],
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: '#fff'
                        }
                    },
                    data: [
                        {value: 335, name: '69'},
                        {value: 310, name: '183'},
                        {value: 234, name: '210'},
                        {value: 235, name: '501 A'},
                        {value: 235, name: '501 B'},
                        {value: 235, name: '501 C'},
                        {value: 235, name: '501 D'},
                        {value: 235, name: '501 E'},
                        {value: 158, name: '504'},
                        {value: 154, name: '505'},
                        {value: 1548, name: '506'},
                    ]
                }]
            });
        }

        if (intendentexfuerza) {

            // Initialize chart
            var intendentexfuerza_chart = echarts.init(intendentexfuerza);


            //
            // Chart config
            //

            // Options
            intendentexfuerza_chart.setOption({

                // Colors
                color: [
                    '#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
                    '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
                    '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
                    '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
                ],

                // Global text styles
                textStyle: {
                    fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                    fontSize: 13
                },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(0,0,0,0.75)',
                    padding: [10, 15],
                    textStyle: {
                        fontSize: 13,
                        fontFamily: 'Roboto, sans-serif'
                    },
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    top: 'top',
                    left: 0,
                    data: ['GEM', 'Somos Catamarca', 'Frente Todos', 'Consenso Federal', 'Izquierda', 'Juntos por el Cambio'],
                    itemHeight: 8,
                    itemWidth: 8
                },

                // Add series
                series: [{
                    name: 'Fuerza Política',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '57.5%'],
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: '#fff'
                        }
                    },
                    data: [
                        {value: 1335, name: 'GEM'},
                        {value: 1310, name: 'Somos Catamarca'},
                        {value: 10234, name: 'Frente Todos'},
                        {value: 1135, name: 'Consenso Federal'},
                        {value: 1548, name: 'Izquierda'},
                        {value: 10548, name: 'Juntos por el Cambio'}
                    ]
                }]
            });
        }

        //
        // Resize charts
        //

        // Resize function
        var triggerChartResize = function() {
            intendentexlista && intendentexlista_chart.resize();
            intendentexfuerza && intendentexfuerza_chart.resize();
        };

        // On sidebar width change
        $(document).on('click', '.sidebar-control', function() {
            setTimeout(function () {
                triggerChartResize();
            }, 0);
        });

        // On window resize
        var resizeCharts;
        window.onresize = function () {
            clearTimeout(resizeCharts);
            resizeCharts = setTimeout(function () {
                triggerChartResize();
            }, 200);
        };
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _piesDonutsExamples();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    EchartsPiesDonuts.init();
});
