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
				<span>Tenemos</span>
				<h2>Inversiones con impacto</h2>
				<p>
                    En Inversora Era Dorada S.A.S, creemos en el poder de las inversiones para generar un impacto positivo en la sociedad y 
                    en el crecimiento económico. Nuestra visión se centra en invertir en una amplia gama de oportunidades que no solo 
                    sean financieramente sólidas, sino que también promuevan el desarrollo sostenible y mejoren la calidad de vida de 
                    las comunidades.
                </p>
                <p>
                Nuestra filosofía de inversión se basa en la búsqueda de oportunidades que no solo generen rendimientos financieros sólidos, sino que también impulsen el progreso económico y social. Creemos en la importancia de invertir de manera responsable y sostenible, considerando tanto los aspectos financieros como los impactos sociales y ambientales de nuestras decisiones de inversión.
                </p>
			</div>
			<div class="col-md-6 ">
				<img class="img-responsive2" src="images/inversiones-vertical.jpg">
			</div>
		</div>
	</div>
    <div class="SwiperDiv">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-2 text-center fh5co-heading">
                <h2>Impacto Social y Ambiental</h2>
                <p>Valoramos las inversiones que generan un impacto positivo en la sociedad y el medio ambiente. Buscamos oportunidades que promuevan el desarrollo sostenible, la equidad social y la conservación del medio ambiente, contribuyendo así al bienestar de las generaciones presentes y futuras.</p>
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
    <h1>Nuestro Enfoque de Inversión</h1>
    <div class="circle-text">
        <p>
            <span><b>Principios Rectores</b></span><br>
            <span><b>Sostenibilidad:</b> Nos comprometemos a seleccionar inversiones que promuevan la sostenibilidad a largo plazo, contribuyendo al bienestar de las generaciones futuras y al cuidado del medio ambiente.</span>

            <span><b>Innovación:</b> Valoramos la innovación y buscamos constantemente oportunidades en sectores emergentes y disruptivos que puedan ofrecer un potencial de crecimiento significativo.</span>

            <span><b>Diversificación:</b> Adoptamos una estrategia de diversificación para minimizar el riesgo y maximizar el rendimiento de nuestra cartera de inversiones, explorando una amplia gama de activos y mercados.</span>

            <span><b>Ética y Transparencia:</b> Operamos con los más altos estándares éticos y nos comprometemos a mantener la transparencia en todas nuestras operaciones e inversiones.</span>

            <span><b>Enfoque Estratégico</b></span><br>
            <span><b>Desarrollo Comunitario:</b> Buscamos oportunidades de inversión que fomenten el desarrollo económico y social en las comunidades locales, apoyando proyectos y empresas que generen empleo, educación y oportunidades para todos.</span>

            <span><b>Tecnología y Digitalización:</b> Reconocemos el poder transformador de la tecnología y la digitalización y buscamos invertir en empresas innovadoras que impulsen la digitalización de la economía y mejoren la calidad de vida de las personas.</span>

            <span><b>Inclusión Financiera:</b> Nos comprometemos a promover la inclusión financiera invirtiendo en proyectos y empresas que brinden acceso a servicios financieros a comunidades subatendidas y marginadas.</span>

            <span><b>Impacto Positivo</b></span><br>
            <span>En Inversora Era Dorada S.A.S, creemos en el poder de las inversiones para generar un impacto positivo en el mundo. Nos esforzamos por ser líderes en la creación de valor compartido, donde el éxito financiero se combina con la responsabilidad social y ambiental.</span>
        </p>
    </div>
</div>


    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6">
				<img class="img-responsive" src="images/inversiones1.jpg">
			</div>
			<div class="col-md-6 animate-box">
                <h2>Invertirtimos en diversidad</h2>
				<p>
                    Desde bienes muebles corporales e incorporales hasta inmuebles rurales y urbanos, tanto a nivel nacional como internacional, exploramos una variedad de opciones de inversión para maximizar el retorno y la diversificación de la cartera.

                </p>
			</div>
			
		</div>
	</div>

    <div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>Ofrecemos</span>
				<h2>Administración Integral</h2>
				<p>
                    Nos comprometemos a proporcionar una gestión integral de todas nuestras inversiones, asegurando una supervisión constante y eficiente para maximizar el rendimiento y minimizar los riesgos.

                </p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/inversiones3.jpg">
			</div>
		</div>
	</div>
    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6">
				<img class="img-responsive" src="images/inversiones2.jpg">
			</div>
			<div class="col-md-6 animate-box">
                <h2>Promoción Empresarial</h2>
				<p>
                    Participamos activamente en la promoción y financiamiento de empresas y negocios con potencial de crecimiento, independientemente de su naturaleza civil, mercantil, financiera o administrativa. Nos asociamos con emprendedores y empresarios visionarios para impulsar la innovación y el desarrollo empresarial.
 
                </p>
			</div>
			
		</div>
	</div>

    <div id="fh5co-about">
		<div class="container">
            <div class="col-md-6 ">
				<img class="img-responsive2" src="images/inversiones4.jpg">
			</div>
			<div class="col-md-6 animate-box">
				<h2>Nuestro Compromiso</h2>
				<p>
                En Inversora Era Dorada S.A.S., nuestro compromiso va más allá de obtener retornos financieros. Nos esforzamos por ser agentes de cambio positivo en las comunidades en las que operamos, trabajando en estrecha colaboración con nuestros socios y clientes para alcanzar un futuro más próspero y sostenible para todos.

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