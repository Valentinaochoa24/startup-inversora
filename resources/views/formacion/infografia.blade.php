@extends('layout')

@section('title', 'Inicio')

@section('styles')
    <style>

header {
  background-color: #002024;
  color: #fff;
  padding: 1em;
  text-align: center;
}

nav {
  background-color: #002024;
  padding: 1em;
  text-align: center;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
}

nav li {
  margin-right: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

main {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 2em;
}

.infografia {
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 80%;
}
#contenido {
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 70%;
}
#infografias {
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 80%;
}


.infografia img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
}

.infografia-text {
  padding: 1em;
  background-color: #f7f7f7;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.infografia-text h3 {
  font-weight: bold;
  margin-top: 0;
}

.infografia-text p {
  font-size: 16px;
  margin-bottom: 20px;
}
    </style>
@endsection

@section('content')
<header>
    <nav>
        <ul>
            <li><a href="#infografias">Infografías</a></li>
            <li><a href="#contenido">Contenido</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="infografias" class="justify-content-center">
        <h1>Infografías</h1>
        <div class="infografia">
            <br>
            <img src="{{ asset('images/slideInvertir.jpg') }}" alt="Infografía de Finanzas">
            <h3 class="infografia-title">Infografía: Estrategias de Inversión</h3>
            <div class="infografia-text">
                <div class="infografia-section">
                    <h4>Diversificación de Cartera</h4>
                    <p>La diversificación de la cartera es una estrategia clave para reducir el riesgo al invertir. Consiste en distribuir tus inversiones en diferentes activos, como acciones, bonos, bienes raíces y otros, para mitigar la exposición a la volatilidad de un solo mercado o activo.</p>
                </div>
                <div class="infografia-section">
                    <h4>Análisis Técnico y Fundamental</h4>
                    <p>El análisis técnico se centra en el estudio de los gráficos de precios y otros indicadores técnicos para predecir movimientos futuros del mercado, mientras que el análisis fundamental evalúa los fundamentos financieros y económicos de una empresa o activo para determinar su valor intrínseco.</p>
                </div>
                <div class="infografia-section">
                    <h4>Gestión de Riesgos</h4>
                    <p>La gestión de riesgos es crucial para proteger tu capital y maximizar tus ganancias. Incluye medidas como establecer stop-loss, diversificar tu cartera, utilizar productos financieros derivados como opciones y futuros, y tener un plan de inversión claro y disciplinado.</p>
                </div>
            </div>
        </div>
        <div class="infografia">
            <br>
            <img src="{{ asset('images/contardinero.jpg') }}" alt="Infografía de Emprendimiento">
            <div class="infografia-text">
                <h3>Infografía: Claves para Emprender</h3>
                <p>Emprender es un camino emocionante lleno de desafíos y oportunidades. Para tener éxito en este viaje, es importante tener en cuenta algunas claves fundamentales:</p>
                <ul>
                    <li><strong>Identificación de oportunidades:</strong> Antes de iniciar tu negocio, es crucial identificar oportunidades en el mercado. Esto implica comprender las necesidades y deseos de tus clientes potenciales y encontrar un nicho donde puedas destacarte.</li>
                    <li><strong>Planificación estratégica:</strong> Desarrolla un plan de negocio sólido que incluya objetivos claros, estrategias de marketing, análisis de competencia y proyecciones financieras. La planificación estratégica te ayudará a establecer una dirección clara para tu empresa y a mantener el rumbo hacia tus metas.</li>
                    <li><strong>Gestión eficiente de recursos:</strong> Utiliza tus recursos de manera inteligente y eficiente. Esto incluye tanto los recursos financieros como los humanos. Aprende a priorizar tareas y a delegar responsabilidades cuando sea necesario para optimizar el rendimiento de tu empresa.</li>
                    <li><strong>Innovación y adaptabilidad:</strong> El mercado empresarial es dinámico y está en constante cambio. Para tener éxito a largo plazo, es importante mantenerse innovador y adaptable. Esté abierto a nuevas ideas y dispuesto a ajustar tu estrategia según las condiciones del mercado.</li>
                    <li><strong>Resiliencia:</strong> Emprender puede ser un viaje lleno de altibajos. Es importante mantenerse resiliente frente a los desafíos y obstáculos que puedan surgir en el camino. Aprende de los fracasos y utiliza cada experiencia como una oportunidad para crecer y mejorar.</li>
                </ul>
                <p>Al tener en cuenta estas claves para emprender, estarás mejor preparado para enfrentar los desafíos y aprovechar las oportunidades que surjan en tu camino hacia el éxito empresarial.</p>
            </div>
        </div>

    </section>
    <br><br><br>
    <section id="contenido">
        <h1>Contenido</h1>
        <p>Bienvenido a nuestra plataforma de aprendizaje e inversión. En [Nombre de la Empresa], nos comprometemos a proporcionarte una experiencia educativa completa y enriquecedora para ayudarte a alcanzar tus objetivos financieros y profesionales.</p>
        <p>Descubre una amplia gama de recursos cuidadosamente seleccionados para brindarte el conocimiento y las habilidades necesarias para triunfar en el mundo de las inversiones y los negocios.</p>
        <h3>Recursos Disponibles:</h3>
        <ul>
            <li><strong>Infografías Informativas:</strong> Explora nuestras infografías interactivas que abordan temas clave en el ámbito financiero y empresarial, como estrategias de inversión, gestión de riesgos, análisis de mercado y más. Accede a ellas fácilmente desde nuestra sección de infografías.</li>
            <li><strong>Artículos Especializados:</strong> Sumérgete en nuestro extenso catálogo de artículos escritos por expertos en la industria. Desde análisis de tendencias hasta consejos prácticos, nuestros artículos te mantendrán informado y actualizado sobre las últimas noticias y desarrollos en el mundo financiero.</li>
            <li><strong>Webinars en Vivo:</strong> Únete a nuestros webinars en vivo conducidos por profesionales experimentados. Participa en discusiones interactivas, realiza preguntas en tiempo real y obtén información valiosa sobre estrategias de inversión, gestión de cartera, oportunidades de mercado y más.</li>
            <li><strong>Guías y Tutoriales:</strong> Accede a nuestras guías detalladas y tutoriales paso a paso para aprender conceptos financieros complejos de manera fácil y práctica. Desde principiantes hasta inversores experimentados, tenemos recursos adaptados a todos los niveles de experiencia.</li>
        </ul>
        <p>No importa si estás comenzando tu viaje en el mundo de las inversiones o si eres un profesional establecido, en [Nombre de la Empresa] encontrarás todo lo que necesitas para avanzar hacia el éxito financiero.</p>
    </section>

</main>

@endsection

@section('scripts')
   <script>
    // Agregar eventos de hover a las infografías
const infografias = document.querySelectorAll('.infografia');
infografias.forEach((infografia) => {
  infografia.addEventListener('mouseover', () => {
    infografia.classList.add('hover');
  });
  infografia.addEventListener('mouseout', () => {
    infografia.classList.remove('hover');
  });
});
   </script>
@endsection
