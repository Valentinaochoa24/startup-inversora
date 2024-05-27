@extends('layout')

@section('title', 'Evento')

@section('styles')
<style>
    .card {
 width: 190px;
 height: 254px;
 margin: 0 auto;
 background-color: #011522;
 border-radius: 8px;
 z-index: 1;
}

.tools {
 display: flex;
 align-items: center;
 padding: 9px;
}

.circle {
 padding: 0 4px;
}

.box {
 display: inline-block;
 align-items: center;
 width: 10px;
 height: 10px;
 padding: 1px;
 border-radius: 50%;
}

.red {
 background-color: #ff605c;
}

.yellow {
 background-color: #ffbd44;
}

.green {
 background-color: #00ca4e;
}

</style>
@endsection

@section('content')
<br><br><br>
<h1 class="text-center">
    @if($evento->tipo == 0)
    Conferencia
    @elseif( $evento->tipo == 1)
    Evento virtual
    @else
    Evento
    @endif
</h1>
    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6 ">
				<img class="img-responsive3" src="{{ asset('storage/' . $evento->imagen) }}">
			</div>
			<div class="col-md-6 animate-box">
				<span>Proximamente</span>
				<h2>{{ $evento->nombre }}</h2>
				<p>
                    {{ $evento->descripcion }}
                </p>
			</div>
			
		</div>
	</div>

    <div class="container">
        <div class="row">
            <div class="col">
            <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/reshot-icon-location-PQFH8AD4GR.svg') }}" style="width: 100px;" alt="" srcset="">
                    </div>
                    <div class="col">
                        <h3>{{$evento->ubicacion}}</h3>
                    </div>
                </div>    
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/reshot-icon-check-in-check-out-date-Z9NJBE2AD3.svg') }}" style="width: 100px;" alt="" srcset="">
                    </div>
                    <div class="col">
                        <h3>{{$evento->fecha_evento}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br><br>
    <div id="fh5co-register" style="background-image: url('{{ asset('images/cellphone.jpg') }}');">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Invierte, aprende y crece</h2>
					<h3>Que esperas para crecer?</h3>
					<div class="simply-countdown simply-countdown-two"></div>
					<p><strong>Comienza ahora!</strong></p>
					<!-- <p><a href="#" class="btn btn-primary btn-lg btn-reg">Registrate ahora!</a></p> -->
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script>
		var fechaEvento = "<?php echo $evento->fecha_evento; ?>";
		var d = new Date(fechaEvento); // Quitamos .getTime() y corregimos el formato de la fecha

console.log(d.getDate());
		// default example
		simplyCountdown('.simply-countdown-two', {
				year: d.getFullYear(),
				month: d.getMonth() + 1,
				day: d.getDate()
		});

	
	</script>
@endsection