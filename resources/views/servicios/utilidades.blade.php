@extends('layout')

@section('title', 'Inversiones con Impacto')

@section('styles')
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}

.swiper-container {
    width: 100%;
    height: 300px;
    margin-bottom: 20px;
}

.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    color: #074d13;
}

p {
    color: #666;
    line-height: 1.5;
}

.heading-section{
  color: #f4f4f4;
}
/* .circle-text p {
    text-align: center;
}

.circle-text p span {
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    background-color: #007bff;
    color: #fff;
    padding: 20px;
    margin: 10px;
}

.circle-text p span b {
    display: block;
    margin-bottom: 10px;
} */

</style>
@endsection
@section('content')
    <div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<h2>Descubre Nuestras Utilidades</h2>
				<p>
                    En Inversora Era Dorada S.A.S, nos dedicamos a proporcionar una amplia gama de utilidades diseñadas para maximizar el valor de tus inversiones y promover el crecimiento económico. Nuestros servicios están diseñados para ofrecer soluciones integrales y personalizadas que se adapten a tus necesidades específicas y objetivos financieros.


                </p>
                <p>
                Nuestra filosofía de inversión se basa en la búsqueda de oportunidades que no solo generen rendimientos financieros sólidos, sino que también impulsen el progreso económico y social. Creemos en la importancia de invertir de manera responsable y sostenible, considerando tanto los aspectos financieros como los impactos sociales y ambientales de nuestras decisiones de inversión.
                </p>
			</div>
			<div class="col-md-6 ">
				<img class="img-responsive2" src="images/financiacion.jpg">
			</div>
		</div>
	</div>
    <div class="SwiperDiv">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-2 text-center fh5co-heading">
                <h2>Diversificación de Inversiones</h2>
                <p>Nuestro equipo experto te ayudará a diversificar tus inversiones en una variedad de activos, incluyendo bienes muebles e inmuebles, tanto a nivel nacional como internacional. Esto te permitirá reducir el riesgo y maximizar el rendimiento de tu cartera de inversión.</p>
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




    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6">
				<img class="img-responsive" src="images/asesoria5.jpg">
			</div>
			<div class="col-md-6 animate-box">
                <h2>Administración Profesional de Carteras</h2>
				<p>
                Contamos con gestores de inversiones altamente calificados que se encargarán de administrar tu cartera de inversiones de manera activa y eficiente. Utilizando análisis de mercado y estrategias de gestión de riesgos, nos aseguramos de que tus inversiones estén optimizadas para alcanzar tus objetivos financieros.


                </p>
			</div>
			
		</div>
	</div>

    <div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>Ofrecemos</span>
				<h2>Asesoramiento Personalizado</h2>
				<p>
                Nuestro equipo de expertos te proporcionará asesoramiento personalizado en todas las etapas de tu proceso de inversión. Desde la identificación de oportunidades de inversión hasta la gestión de tu cartera, estaremos contigo en cada paso del camino para ayudarte a tomar decisiones informadas y rentables.
                </p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/asesoria1.jpg">
			</div>
		</div>
	</div>
    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6">
				<img class="img-responsive" src="images/asesoria3.jpg">
			</div>
			<div class="col-md-6 animate-box">
                <h2> Acceso a Oportunidades Exclusivas</h2>
				<p>
                Gracias a nuestra extensa red de contactos y asociaciones estratégicas, te ofrecemos acceso a oportunidades de inversión exclusivas que de otra manera podrían estar fuera de tu alcance. Esto te permitirá aprovechar al máximo tu capital y alcanzar tus objetivos financieros de manera más rápida y eficiente.
                </p>
			</div>
			
		</div>
	</div>

    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6 ">
				<img class="img-responsive2" src="images/asesoria4.jpg">
			</div>
			<div class="col-md-6 animate-box">
				<h2> Seguimiento y Actualización Continua</h2>
				<p>
                Nos comprometemos a proporcionarte un seguimiento continuo y actualizaciones regulares sobre el rendimiento de tus inversiones. Esto te permitirá estar siempre informado sobre el estado de tu cartera y tomar decisiones informadas sobre ajustes o modificaciones necesarias.
                </p>
			</div>
			
		</div>
	</div>



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