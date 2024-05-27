@extends('layout')

@section('title', 'Inicio')

@section('styles')

@endsection

@section('content')
	<div class="banner" style="background-image: url('images/img-inver-teaching.jpg')">
		<div class="overlay2"></div>
			<div class="banner-content">
				<h1>Inversiones, educación y crecimiento</h1>
				<p>Conocenos!</p>
				<a class="btn"href="{{ url('/nosotros') }}">Quienes somos?</a>
			</div>
		</div>
  	</div>
	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2 class="titulo-centrado">Nuestros servicios</h2>
					<p class="texto-justificado">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>

			</div>
			<div class="row">
					<div class="col-md-6 col-sm-6 text-center animate-box">
						<div class="services">
							<img src="images/inversion.png" width="130px" alt="Inversiones">
							<div class="desc2">
									<h3><a href="{{ url('/inversiones') }}">Inversiones</a></h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 text-center animate-box">
						<div class="services">
							<img src="images/img-financiacion.jpg" width="130px"  alt="Financiación">
							<div class="desc1">
									<h3><a href="{{ url('/financiacion') }}">Financiación</a></h3>
							</div>
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 text-center animate-box">
					<div class="services">
						<img src="images/financiacion.jpg" width="130px"  alt="Utilidades claras">
						<div class="desc1">
								<h3><a href="{{ url('/utilidades') }}">Utilidades claras</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 text-center animate-box">
					<div class="services">
						<img src="images/educacion.jpg" width="130px"  alt="Asesoría y formación">
						<div class="desc2">
								<h3><a href="{{ url('/asesoria') }}">Asesoría y formación</a></h3>
						</div>
					</div>
				</div>		
			</div>
				
		</div>
  	</div>

  @include('propuestas.component.propuestaFour')
  <br>

	<div id="fh5co-blog">
		<div class="container">
		@include('eventos.component.eventoVirtual')
		<br><br><br>
		@include('eventos.component.conferencias')
		</div>
	</div>

	<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
        <li style="background-image: url(images/img-inver-teaching.jpg);">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center slider-text">
                        <div class="slider-text-inner">
                            <h1>No te pierdas los proximos eventos!</h1>
                                <h2>No olvides agendarte!</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="{{ url('/eventos') }}">Próximos eventos</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>		   	
        </ul>
    </div>
</aside>
@endsection

@section('scripts')
    <!-- Aquí puedes incluir scripts específicos para esta página -->
@endsection
