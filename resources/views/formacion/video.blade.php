@extends('layout')

@section('title', 'Videos y Videoconferencias')

@section('styles')
    <!-- Estilos específicos para esta página -->
    <link rel="stylesheet" href="{{ asset('css/videos.css') }}">
@endsection

@section('content')
<header>
    <nav>
      <ul>
        <li><a href="#videos">Videos</a></li>
        <li><a href="#videoconferencias">Videoconferencias</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="videos">
      <h2>Videos</h2>
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        <p>Descripción del video</p>
      </div>
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        <p>Descripción del video</p>
      </div>
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        <p>Descripción del video</p>
      </div>
    </section>
    <section id="videoconferencias">
      <h2>Videoconferencias</h2>
      <div class="videoconferencia">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEOCONFERENCIA_ID" frameborder="0" allowfullscreen></iframe>
        <p>Descripción de la videoconferencia</p>
      </div>
    </section>
  </main>
@endsection

@section('scripts')
    <!-- Scripts específicos para esta página -->
    <script>
        // Agregar eventos de clic a los videos y videoconferencias
const videos = document.querySelectorAll('.video');
videos.forEach((video) => {
  video.addEventListener('click', () => {
    // Acción al hacer clic en un video
  });
});

const videoconferencias = document.querySelectorAll('.videoconferencia');
videoconferencias.forEach((videoconferencia) => {
  videoconferencia.addEventListener('click', () => {
    // Acción al hacer clic en una videoconferencia
  });
});
    </script>
@endsection
