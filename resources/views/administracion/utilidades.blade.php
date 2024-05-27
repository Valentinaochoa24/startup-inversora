@extends('adminLayout')

@section('title', 'Utilidades')

@section('styles')
<style>
    html, body, #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
</style>

@endsection

@section('content')
    <div class="header">
        <div class="row" id="slideLogin">
        <div class="overlay">
        <h2>Hola, {{session('user')->nombre}} !</h2>
            <p>Aca encontraras tus utilidades.</p>
        </div>
        <img src="{{ asset('images/rascacielos.jpg') }}"  alt="" srcset="">

    </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Utilidades de las Inversiones</h5>
                <div style="width: 100%">
                <canvas id="grafica"></canvas>
            </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
                <div id="container"></div>
           
        </div>
    </div>
    
@endsection
@section('scripts')
<script src="https://cdn.anychart.com/releases/8.12.1/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.12.1/js/anychart-cartesian.min.js"></script>
<script>
    anychart.onDocumentReady(function() {

    // create data
    var data = [
    {x: "Enero", value: 10000},
    {x: "Febrero", value: 12000},
    {x: "Marzo", value: 18000},
    {x: "Abril", value: 11000},
    ];

    // create a chart
    var chart = anychart.line();

    // create a spline series and set the data
    var series = chart.spline(data);

    // set the chart title
    chart.title("Propuestas");

    // set the titles of the axes
    var xAxis = chart.xAxis();
    xAxis.title("Mes");
    var yAxis = chart.yAxis();
    yAxis.title("monto, $");

    // set the container id
    chart.container("container");

    // initiate drawing the chart
    chart.draw();
    });
</script>
    <script>
        
        const labels = {!! json_encode($labels) !!};
        const datasets = {!! json_encode($datasets) !!};

        const graph = document.querySelector("#grafica");

        const data = {
            labels: labels,
            datasets: datasets
        };

        const config = {
            type: 'line',
            data: data,
        };

        new Chart(graph, config);




    </script>
@endsection
