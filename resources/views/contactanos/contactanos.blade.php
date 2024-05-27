@extends('layout')

@section('title', 'Contactanos')

@section('styles')
    <!-- Aquí puedes incluir estilos específicos para esta página -->
@endsection

@section('content')
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/La-mejor-forma-de-invertir.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Contactanos</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
	@endif
	@if(session('error'))
		<div class="alert alert-danger">
			{{ session('error') }}
		</div>
	@endif
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Información de contacto</h3>
						<ul>
							<li class="address">Cra 48 #38-48, <br> Cali, valle del cauca</li>
							<!-- <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li> -->
							<li class="email"><a href="mailto:servicioalcliente@inverdoradasas.com">servicioalcliente@inverdoradasas.com</a></li>
							<li class="url"><a href="/index.html">Inversora Era dorada </a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Tienes dudas?, Escribenos</h3>
					<form action="{{ route('mensaje.submit') }}" method="post" enctype="multipart/form-data">
						@csrf	
						<div class="row form-group">
							<div class="col-md-6">
								<input type="text" id="fname" name="fname" class="form-control" placeholder="Nombre" required>
							</div>
							<div class="col-md-6">
								<input type="text" id="lname" name="lname" class="form-control" placeholder="Apellido" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="tel" id="subject" name="subject" class="form-control" placeholder="Teléfono" required>
								<div id="telefonoError" class="invalid-feedback"></div>
							</div>
						</div>
						

						<div class="row form-group">
							<div class="col-md-12">
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escribe tu mensaje" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar Mensaje" class="btn btn-primary">
						</div>
					</form>
	
				</div>
			</div>
			
		</div>
	</div>
  <div class="text-center">
    <h2>Nuestra ubicación</h2>
  </div>
  <div class="text-center mt-12">
    <iframe
      width="850px"
      height="450px"
      style="border:0"
      loading="lazy"
      allowfullscreen
      referrerpolicy="no-referrer-when-downgrade"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.744070317379!2d-76.51542612596602!3d3.4124434514796693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a6d03efe27b9%3A0xdd9dc1cd41b3f62e!2sCra.%2042%20%2338-48%2C%20Union%20de%20Vivienda%20Popular%2C%20Cali%2C%20Valle%20del%20Cauca!5e0!3m2!1ses!2sco!4v1712416971258!5m2!1ses!2sco">
    </iframe>
  </div>
  <br>
  

	<div id="fh5co-register" style="background-image: url(images/manInver.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Invierte, aprende y crece</h2>
					<h3>Que esperas para crecer?</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Comienza ahora!</strong></p>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contactForm');
        var telefonoInput = document.getElementById('subject');

        telefonoInput.addEventListener('input', function() {
            validarTelefono(telefonoInput);
        });

        form.addEventListener('submit', function(event) {
            if (!validarTelefono(telefonoInput)) {
                event.preventDefault();
            }
        });

        function validarTelefono(input) {
            var regex = /^\d{1,10}$/; // Acepta de 1 a 10 dígitos
            var mensaje = 'El número de teléfono debe tener máximo 10 dígitos.';
            var esValido = regex.test(input.value.trim());

            mostrarError(input, !esValido, mensaje);

            return esValido;
        }

        function mostrarError(input, condicion, mensaje) {
            var errorDiv = input.nextElementSibling;
            errorDiv.innerText = condicion ? mensaje : '';
            input.classList.toggle('is-invalid', condicion);
        }
    });
</script>
@endsection
