<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Victor - Grafica de estudiantes</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
            crossorigin="anonymous"
        >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shards-ui/3.0.0/css/shards.css">
    </head>

    <body>
        <div class="container pt-4">
            <h4 class="font-weight-normal"><b>Gráfica</b></h4>
            <hr>
            <div>
                <canvas id="buyers" width="600" height="300"></canvas>
            </div>
        </div>
    </body>

</html>

<script 
    data-require="chart.js@*" 
    data-semver="1.0.2"
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"
></script>

<script>
var buyerData = {
    labels : ["January","February","March","April","May","June"],
    datasets : [
        {
            fillColor : "rgba(172,194,132,0.4)",
            strokeColor : "#ACC26D",
            pointColor : "#fff",
            pointStrokeColor : "#9DB86D",
            data : [203,156,99,251,305,247]
        }
    ]
}
var buyers = document.getElementById('buyers').getContext('2d');
new Chart(buyers).Line(buyerData, {
    animation: true,
    animationSteps: 100,
    animationEasing: "easeOutQuart",
    scaleFontSize: 16,
    responsive: true,
    showTooltip: true,
    tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
    scaleShowGridLines : false,
    bezierCurve : false,
    pointDotRadius : 5,
});
</script>
