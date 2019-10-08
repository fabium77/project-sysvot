/* ------------------------------------------------------------------------------
 *
 *  # C3.js - bars and pies
 *
 *  Demo JS code for c3_bars_pies.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var С3BarsPies = function() {


    //
    // Setup module components
    //

    // Chart
    var _barsPiesExamples = function() {
        if (typeof c3 == 'undefined') {
            console.warn('Warning - c3.min.js is not loaded.');
            return;
        }

        // Define charts elements
        var intendentexlista = document.getElementById('intendentexlista');
        var intendentexfuerza = document.getElementById('intendentexfuerza');
        console.log("Aqui "+$("#intendente69").text());
        // Pie chart
        if(intendentexlista) {

            // Generate chart
            var il_chart = c3.generate({
                bindto: intendentexlista,
                size: { width: 350 },
                color: {
                    pattern: [
                        '#2ec7c9','#b6a2de','#5ab1ef','#80a5e8','#d87a80',
                        '#8d98b3','#e5cf0d','#ff0000','#95706d','#dc69aa',
                        '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
                        '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
                    ]
                },
                data: {
                    columns: [
                        ['69', $("#intendente69").text()],
                        ['503 B', $("#intendente503b").text()],
                        ['503 C', $("#intendente503c").text()],
                        ['503 D', $("#intendente503d").text()],
                        ['503 E', $("#intendente503e").text()],
                        ['504', $("#intendente504").text()],
                        ['505', $("#intendente505").text()],
                        ['506 Jalile', $("#intendente506").text()],
                    ],
                    type : 'pie'
                }
            });

            // Change data
            // setTimeout(function () {
            //     pie_chart.load({
            //         columns: [
            //             ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
            //             ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
            //             ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
            //         ]
            //     });
            // }, 4000);
            // setTimeout(function () {
            //     pie_chart.unload({
            //         ids: 'data1'
            //     });
            //     pie_chart.unload({
            //         ids: 'data2'
            //     });
            // }, 8000);

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                il_chart.resize();
            });
        }

        if(intendentexfuerza) {


            var vFuerPolitGem = parseInt($("#intendente69").text());

            var vFuerPolitDeTodos = parseInt($("#intendente503b").text()) + parseInt($("#intendente503c").text()) + parseInt($("#intendente503d").text()) + parseInt($("#intendente503d").text()); 

            var vFuerPolitConsFed = parseInt($("#intendente504").text());

            var vFuerPolitFrenIzqu = parseInt($("#intendente505").text());

            var vFuerPolitJuntCambio = parseInt($("#intendente506").text());

            console.log(vFuerPolitDeTodos);

            // Generate chart
            var if_chart_ = c3.generate({
                bindto: intendentexfuerza,
                size: { width: 350 },
                color: {
                    pattern: [
                        '#2ec7c9','#b6a2de','#5ab1ef','#ff0000','#d87a80',
                        '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
                        '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
                        '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
                    ]
                },
                data: {
                    columns: [
                        ['GEM', vFuerPolitGem],
                        ['Frente de Todos', vFuerPolitDeTodos],
                        ['Consenso Federal', vFuerPolitConsFed],
                        ['Frente de Izquierda', vFuerPolitFrenIzqu],
                        ['Juntos por el Cambio', vFuerPolitJuntCambio],
                    ],
                    type : 'pie'
                }
            });

            // Change data
            // setTimeout(function () {
            //     pie_chart.load({
            //         columns: [
            //             ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
            //             ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
            //             ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
            //         ]
            //     });
            // }, 4000);
            // setTimeout(function () {
            //     pie_chart.unload({
            //         ids: 'data1'
            //     });
            //     pie_chart.unload({
            //         ids: 'data2'
            //     });
            // }, 8000);

            // Resize chart on sidebar width change
            $('.sidebar-control').on('click', function() {
                if_chart.resize();
            });
        }
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _barsPiesExamples();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    С3BarsPies.init();
});
