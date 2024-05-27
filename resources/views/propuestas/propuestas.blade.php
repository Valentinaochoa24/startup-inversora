@extends('layout')

@section('title', 'Propuestas')

@section('styles')
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('content')
<div class="banner" style="background-image: url('/images/financiacion.jpg')">
  <div class="overlay2"></div>
    <div class="banner-content">
        <h1>Propuestas</h1>
        <p>Ingresa para empezar!</p>
        <a href="/ingresar" class="btn">Registrate ahora!</a>
    </div>
  </div>
	@include('propuestas.component.propuestaFour')

  <div class="SwiperDiv">
      <div class="row animate-box">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
              <h2>Galería de propuestas</h2>
              <p>Descubre las más innovadoras propuestas para transformar el mundo y construir un futuro más próspero y sostenible. ¡Únete a nosotros en esta emocionante travesía hacia el cambio positivo!</p>
          </div>
      </div>
      <div #swiperRef="" class="swiper mySwiper">
          <div class="swiper-wrapper">
          @foreach($propuestas as $propuesta)
              <div class="swiper-slide"><img src="{{ asset('storage/' . $propuesta->imagen) }}" alt="" srcset=""></div>
          @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
      </div>
  </div>
<br><br><br>
  
  @include('propuestas.component.totalPropuestas')
    
@endsection

@section('scripts')
 <!-- Swiper JS -->
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
