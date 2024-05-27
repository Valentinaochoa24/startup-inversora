@extends('layout')

@section('title', 'Eventos')

@section('styles')
    <!-- Aquí puedes incluir estilos específicos para esta página -->
@endsection

@section('content')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/tecnologia-en-finanzas.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Eventos</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<div id="fh5co-blog">
		<div class="container">
			@include('eventos.component.eventoVirtual')
			<br><br>
			@include('eventos.component.conferencias')
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

@endsection
