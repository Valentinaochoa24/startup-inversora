@extends('adminLayout')

@section('title', 'Administración')

@section('styles')
@endsection

@section('content')

    <div class="header">
        <h1>¡Bienvenido a tu Dashboard!</h1>
        <p>Gestiona tus inversiones de manera eficiente.</p>
    </div>
    <div class="row">
        <div class="col-sm-4">
                <div class="card" id="cardImg">
                    <div class="card-body">
                    <div class="img-dash">
                        <img src="images/trabajo-en-equipo.png" alt="" srcset="">
                    </div>
                    <div class="numero">+12.000</div>
                    </div>
                </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Utilidades de las Inversiones</h5>
                <div style="width: 100%">
                <canvas id="grafica"></canvas>
            </div>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Últimas Inversiones</h5>
                <div >
                <canvas id="graficaRedonda" style="width: 80%"></canvas>
            </div>
            </div>
            </div>
        </div>
        
    </div>
  

@endsection
@section('scripts')
    <script>
                
        const labels = ['Enero', 'Febrero', 'Marzo', 'Abril']

        const dataset1 = {
            label: "Dataset 1",
            data: [10, 55, 60, 120],
            borderColor: 'rgba(248, 37, 37, 0.8)',
            fill: false,
            tension: 0.1
        };

        const dataset2 = {
            label: "Dataset 2",
            data: [5, 44, 55, 100],
            borderColor: 'rgba(69, 248, 84, 0.8)',
            fill: false,
            tension: 0.1
        };

        const dataset3 = {
            label: "Dataset 3",
            data: [20, 40, 55, 120],
            borderColor: 'rgba(69, 140, 248, 0.8)',
            fill: false,
            tension: 0.1
        };

        const dataset4 = {
            label: "Dataset 4",
            data: [18, 40, 20, 100],
            borderColor: 'rgba(245, 40, 145, 0.8)',
            fill: false,
            tension: 0.1
        };

        const graph = document.querySelector("#grafica");

        const data = {
            labels: labels,
            datasets: [dataset1,dataset2,dataset3,dataset4]
        };

        const config = {
            type: 'line',
            data: data,
        };

        new Chart(graph, config);




    </script>
@endsection
