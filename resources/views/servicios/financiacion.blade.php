@extends('layout')

@section('title', 'Inversiones con Impacto')

@section('styles')
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('css/financiacion.css') }}">
<style>
   .heading-section{
  color: #f4f4f4;
}
</style>
@endsection
@section('content')
    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6 ">
				<img class="img-responsive3" src="images/financiacion-vertical.jpg">
			</div>
			<div class="col-md-6 animate-box">
				<span>Tenemos</span>
				<h2>Financiación de Servicios</h2>
				<p>
                    En Inversora Era Dorada S.A.S, ofrecemos una amplia gama de servicios de financiación diseñados para apoyar el desarrollo y la ejecución de proyectos en diversos sectores y áreas de interés. Nuestro compromiso es proporcionar soluciones financieras flexibles y personalizadas que impulsen el crecimiento y la innovación en empresas e iniciativas que generen un impacto positivo en la sociedad.
                </p>
                <p>
                Nuestro enfoque va más allá de simplemente proporcionar fondos; nos comprometemos a ser un verdadero socio estratégico para nuestros clientes, brindando soluciones financieras flexibles y personalizadas que se adapten a sus objetivos y circunstancias únicas. Ya sea que estén buscando financiar la expansión de su empresa, desarrollar nuevos productos o servicios, o llevar a cabo proyectos de impacto social y ambiental, estamos aquí para ayudar.
                </p>
                <p>
                    Nuestro equipo de expertos en financiación trabaja estrechamente con cada cliente para comprender a fondo sus necesidades y objetivos, y luego diseñar soluciones a medida que les permitan alcanzar su máximo potencial. Nos enorgullece ofrecer una atención personalizada y un servicio excepcional en cada etapa del proceso, desde la evaluación inicial hasta la ejecución del proyecto y más allá.
                </p>
                <p>
                Además de proporcionar fondos, también ofrecemos asesoramiento y apoyo integral en áreas como la gestión financiera, la planificación estratégica y el desarrollo de negocios. Nuestro objetivo es no solo ayudar a nuestros clientes a obtener la financiación que necesitan, sino también brindarles las herramientas y los recursos necesarios para alcanzar el éxito a largo plazo.

                </p>
			</div>
			
		</div>
	</div>
    <div class="SwiperDiv">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-2 text-center fh5co-heading">
                <h2>Desarrollo Empresarial</h2>
                <p>
                    Nuestros servicios de financiación están dirigidos a impulsar el desarrollo empresarial a través de acciones como la formación, asesoría, consultoría, y el acompañamiento empresarial. Nos comprometemos a brindar el apoyo necesario para mejorar el desempeño y la competitividad de las empresas en todas las etapas de su ciclo de vida.

                </p>
            </div>
        </div>
        <div #swiperRef="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/emprendimientobolso.avif" alt="" srcset=""></div>
                <div class="swiper-slide"><img src="images/event-abogados.jpg" alt="" srcset=""></div>
                <div class="swiper-slide"><img src="images/educacion.jpg" alt="" srcset=""></div>
                <div class="swiper-slide"><img src="images/about-us-personas.png" alt="" srcset=""></div>
                <div class="swiper-slide"><img src="images/emprendimientoCupcake.jpg" alt="" srcset=""></div>
                <div class="swiper-slide"><img src="images/emprendimientoPan.jpeg" alt="" srcset=""></div>
                <div class="swiper-slide"><img src="images/emprendimientoTch.jpg" alt="" srcset=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="content">
        <br><br>
    <h1>Áreas de Financiación</h1>
    <br><br>
    </div>


    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6">
				<img class="img-responsive" src="images/financiacion1.jpg">
			</div>
			<div class="col-md-6 animate-box">
                <h2>Bienes Muebles e Inmuebles</h2>
				<p>
                    Proporcionamos financiación para la adquisición y gestión de bienes muebles e inmuebles, tanto a nivel nacional como internacional. Ya sea para la compra de equipos, maquinaria, o la inversión en propiedades corporales, rurales o urbanas, estamos aquí para ayudar.
                </p>
			</div>
			
		</div>
	</div>

    <div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>Constitución de</span>
				<h2>Sociedades y Empresas</h2>
				<p>
                 Facilitamos la constitución, financiación y promoción de sociedades y empresas en una variedad de sectores y áreas de negocio. Desde startups hasta empresas consolidadas, ofrecemos el respaldo financiero necesario para hacer realidad sus proyectos empresariales.
 
                </p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/financiacion3.jpg">
			</div>
		</div>
	</div>
    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6">
				<img class="img-responsive" src="images/financiacion2.jpg">
			</div>
			<div class="col-md-6 animate-box">
                <h2>Proyectos Sociales y Ambientales</h2>
				<p>
                En línea con nuestra visión de contribuir al mejoramiento de la calidad de vida y el desarrollo sostenible, ofrecemos financiación para proyectos sociales y ambientales. Desde iniciativas de educación y salud hasta programas de conservación ambiental y desarrollo comunitario, estamos comprometidos con el financiamiento de proyectos que generen un impacto positivo en la sociedad y el medio ambiente.
                </p>
			</div>
			
		</div>
	</div>

    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6 ">
				<img class="img-responsive2" src="images/financiacion4.jpg">
			</div>
			<div class="col-md-6 animate-box">
				<h2>Nuestro compromiso</h2>
				<p>
                En Inversora Era Dorada S.A.S., nuestro compromiso va más allá de obtener retornos financieros. Nos esforzamos por ser agentes de cambio positivo en las comunidades en las que operamos, trabajando en estrecha colaboración con nuestros socios y clientes para alcanzar un futuro más próspero y sostenible para todos.

                </p>
			</div>
			
		</div>
	</div>

<br><br><br>
    


    <aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/evento-inversionistas.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h4 class="heading-section">Únete a nosotros en nuestro viaje para hacer inversiones con un propósito y marcar la diferencia en el mundo.</h4>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
 <script>
   var swiper = new Swiper(".mySwiper", {
     slidesPerView: 3,
     centeredSlides: true,
     spaceBetween: 30,
     pagination: {
       el: ".swiper-pagination",
       type: "fraction",
     },
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
   });

   var appendNumber = 4;
   var prependNumber = 1;
   document
     .querySelector(".prepend-2-slides")
     .addEventListener("click", function (e) {
       e.preventDefault();
       swiper.prependSlide([
         '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
         '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
       ]);
     });
   document
     .querySelector(".prepend-slide")
     .addEventListener("click", function (e) {
       e.preventDefault();
       swiper.prependSlide(
         '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
       );
     });
   document
     .querySelector(".append-slide")
     .addEventListener("click", function (e) {
       e.preventDefault();
       swiper.appendSlide(
         '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
       );
     });
   document
     .querySelector(".append-2-slides")
     .addEventListener("click", function (e) {
       e.preventDefault();
       swiper.appendSlide([
         '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
         '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
       ]);
     });
 </script>
@endsection