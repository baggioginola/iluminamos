/**
 * Created by mario on 07/feb/2017.
 */
$(document).ready(function () {

    $(function () {
        var labels = [];
        var sales = [];
        $.ajax({
            url: 'reportes/getProductSales',
            type: "POST",
            cache: false,
            data: {},
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $.each(data, function (key, val) {
                    labels.push(val.codigo_interno);
                    sales.push(val.ventas);
                });
                var chart = {
                    labels: labels,
                    datasets: [
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: sales
                        }
                    ]
                };
                var option = {
                    responsive: true
                };
                // Get the context of the canvas element we want to select
                var ctx = document.getElementById("myChart").getContext('2d');
                var myLineChart = new Chart(ctx).Bar(chart, option); //'Line' defines type of the chart.
            }
        });
    });
});