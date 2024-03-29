$(document).ready(
    function() { 
        var e,
        a = function() {
            $("#sparkline1").sparkline(
                [0,23,43,35,44,45,56,37,40],
                {
                    type:"line",
                    width:"100%",
                    height:"165",
                    chartRangeMax:50,
                    lineColor:"#3bafda",
                    fillColor:"rgba(59,175,218,0.3)",
                    highlightLineColor:"rgba(0,0,0,.1)",
                    highlightSpotColor:"rgba(0,0,0,.2)"
                }
            ),
            $("#sparkline1").sparkline(
                [25,23,26,24,25,32,30,24,19],
                {
                    type:"line",
                    width:"100%",
                    height:"165",
                    chartRangeMax:40,
                    lineColor:"#5d9cec",
                    fillColor:"rgba(93, 156, 236, 0.3)",
                    composite:!0,
                    highlightLineColor:"rgba(0,0,0,.1)",
                    highlightSpotColor:"rgba(0,0,0,.2)"
                }
            ),
            $("#sparkline2").sparkline(
                [3,6,7,8,6,4,7,10,12,7,4,9,12,13,11,12],
                {
                    type:"bar",
                    height:"165",
                    barWidth:"10",
                    barSpacing:"3",
                    barColor:"#3bafda"
                }
            ),
            $("#sparkline3").sparkline(
                [20,40,30,10],
                {
                    type:"pie",
                    width:"165",
                    height:"165",
                    sliceColors:["#dcdcdc","#3bafda","#333333","#00b19d"]
                }
            ),
            $("#sparkline4").sparkline(
                [0,23,43,35,44,45,56,37,40],
                {
                    type:"line",
                    width:"100%",
                    height:"165",
                    chartRangeMax:50,
                    lineColor:"#3bafda",
                    fillColor:"transparent",
                    highlightLineColor:"rgba(0,0,0,.1)",
                    highlightSpotColor:"rgba(0,0,0,.2)"
                }
            ),
            $("#sparkline4").sparkline(
                [25,23,26,24,25,32,30,24,19],
                {
                    type:"line",
                    width:"100%",
                    height:"165",
                    chartRangeMax:40,
                    lineColor:"#5d9cec",
                    fillColor:"transparent",
                    composite:!0,
                    highlightLineColor:"rgba(0,0,0,1)",
                    highlightSpotColor:"rgba(0,0,0,1)"
                }
            ),
            $("#sparkline6").sparkline(
                [3,6,7,8,6,4,7,10,12,7,4,9,12,13,11,12],
                {
                    type:"bar",
                    height:"165",
                    barWidth:"10",
                    barSpacing:"3",
                    barColor:"#00b19d"
                }
            ),
            $("#sparkline6").sparkline(
                [3,6,7,8,6,4,7,10,12,7,4,9,12,13,11,12],
                {
                    type:"line",
                    width:"100%",
                    height:"165",
                    lineColor:"#fb6d9d",
                    fillColor:"transparent",
                    composite:!0,
                    highlightLineColor:"rgba(0,0,0,.1)",
                    highlightSpotColor:"rgba(0,0,0,.2)"
                }
            )
        };
        DrawMouseSpeed = function() {
            var a,
            r=-1,
            o=-1,
            l=0,
            t=[];
            $("html").mousemove(
                function(i) {
                    var e=i.pageX,
                    a=i.pageY;
                    -1<r&&(l+=Math.max(Math.abs(e-r),Math.abs(a-o))),
                    r=e,
                    o=a
                }
            );
            var h = function() {
                var i = (new Date).getTime();
                if(a&&a != i) { 
                    var e = Math.round(l/(i-a)*1e3);
                    t.push(e),
                    30<t.length&&t.splice(0,1),
                    l=0,
                    $("#sparkline5").sparkline(
                        t,
                        {
                            tooltipSuffix:" pixels per second",
                            type:"line",
                            width:"100%",
                            height:"165",
                            chartRangeMax:50,
                            lineColor:"#3bafda",
                            fillColor:"rgba(59,175,218,0.3)",
                            highlightLineColor:"rgba(24,147,126,.1)",
                            highlightSpotColor:"rgba(24,147,126,.2)"
                        }
                    )
                }
                a=i,
                setTimeout(h,500)
            };
            setTimeout(h,500)
        },
        a(),
        DrawMouseSpeed(),
        $(window).resize( function(i) {
            clearTimeout(e),
            e = setTimeout( function() {
                a(),
                DrawMouseSpeed()
            }, 300)
        })
    }),
    jQuery(document).ready(function(i){i(".counter").counterUp({delay:100,time:1200})});