<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.ico') }}">

    <!-- Incluye los archivos CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Incluye otros archivos CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
    @yield('styles')
</head>
<body>
<div id="page">
	<nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-2">
                        <div id="fh5co-logo-container">
							<a href="{{ url('/inicio') }}">
                            <img id="fh5co-logo" src="{{ asset('images/logo.png') }}" alt="Logo" srcset="">
							</a>
						</div>
                    </div>
                    <div class="col-md-10 mt-10 text-right menu-1 ">
                        <ul>
                            <li class="{{ Request::is('inicio') ? 'active' : '' }}"><a href="{{ url('/inicio') }}">Inicio</a></li>
                            <li class="{{ Request::is('nosotros') ? 'active' : '' }}"><a href="{{ url('/nosotros') }}">Nosotros</a></li>
							<li class="has-dropdown">
							<a href="" id="serviciosLink">Servicios</a>
                                <ul class="dropdown" style="position: absolute; top: 42px; left:40%;">
                                    <li><a href="{{ url('/asesoria') }}">Asesoría</a></li>
                                    <li><a href="{{ url('/financiacion') }}">Financiación</a></li>
                                    <li><a href="{{ url('/inversiones') }}">Inversiones</a></li>
                                    <li><a href="{{ url('/utilidades') }}">Utilidades</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('eventos') ? 'active' : '' }}"><a href="{{ url('/eventos') }}">Eventos</a></li>
                            <li class="{{ Request::is('propuestas') ? 'active' : '' }}"><a href="{{ url('/propuestas') }}">Propuestas</a></li>
                            <li class="has-dropdown">
                                <a href="{{ url('/formacion') }}">Formacion</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/formacion/videos') }}">Video Conferencias</a></li>
                                    <li><a href="{{ url('/formacion/infografia') }}">Infografía</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('inicio') ? 'active' : '' }}"><a href="{{ url('/contactanos') }}">Contactanos</a></li>
                            <li class="btn-cta"><a href="{{ url('/ingresar') }}" target="_blank"><span>Ingresar</span></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </nav>
	
    @yield('content')
	<footer class="footer text-white"> 
		<div class="container mt-5"> <div class="row"> 
			<div class="col-md-2 d-flex justify-content-center">
				<div id="fh5co-logo" ><a href="{{ url('/inicio') }}" >
					<img id="fh5co-logo"  src="{{ asset('images/logo.png') }}" alt="Logo" srcset="">

				</a></div>
			</div>
			<div class="col-md-3"> <h3 class="text-white">Información de contacto</h3> 
				<p>Dirección: 123 Calle Principal, Ciudad</p> <p>Teléfono: +123 456 789</p> 
				<p>Email: <span class="text-green">info@inversiones.com</span></p> 
			</div> 
			<div class="col-md-3"> <h3 class="text-white">Enlaces útiles</h3> 
				<ul class="list-unstyled"> 
					<li>
						<a href="{{ url('/inicio') }}" class="text-white">Inicio</a>
					</li> 
					<li>
						<a href="{{ url('/nosotros') }}" class="text-white">Nosotros</a>
					</li>
					 <li><a href="{{ url('/eventos') }}" class="text-white">Eventos</a></li> 
					 
					 <li><a href="{{ url('/propuestas') }}" class="text-white">Propuestas</a></li> 
					 <li><a href="{{ url('/formacion') }}" class="text-white">Formación</a></li> 
					</ul> 
				
				</div> 
				<div class="col-md-3"> 
					<h3 class="text-white">Síguenos en redes sociales</h3> 
					<ul class="list-unstyled"> 
						<li><a href="#" class="text-white"><i class="fa fa-facebook fa-2x text-green"></i> Facebook</a></li> 
						<li><a href="#" class="text-white"><i class="fa fa-twitter fa-2x text-green"></i> Twitter</a></li> 
						<li><a href="#" class="text-white"><i class="fa fa-instagram fa-2x text-green"></i> Instagram</a></li> 
						<li><a href="#" class="text-white"><i class="fa fa-linkedin fa-2x text-green"></i> LinkedIn</a></li> 
					</ul> 
				</div> 
			</div> 
		</div> 
		<br><br><br>
		<div class="text-center py-2 "> 
			<p>&copy; 2024 Inversiones. Todos los derechos reservados.</p> 
		</div> 
	</footer>

</div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- Incluye los archivos JS -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>

	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	
	<script src="{{ asset('js/jquery.countTo.js') }}"></script>
	
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	
	<script src="{{ asset('js/simplyCountdown.js') }}"></script>

	<script src="{{ asset('js/main.js') }}"></script>
	
	<script>
		document.getElementById("serviciosLink").addEventListener("click", function(event){
			event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
		});

		var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

		// default example
		simplyCountdown('.simply-countdown-one', {
				year: d.getFullYear(),
				month: d.getMonth() + 1,
				day: d.getDate()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
				year: d.getFullYear(),
				month: d.getMonth() + 1,
				day: d.getDate(),
				enableUtc: false
		});
	</script>
@yield('scripts')

</body>
</html>
