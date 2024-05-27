@extends('layout')

@section('title', 'Formación para Inversoras')

@section('styles')
    <!-- Aquí puedes incluir estilos específicos para esta página -->
    <style>
        #fh5co-about {
    position: relative;
    background-size: cover;
    background-position: center;
}
.img-responsive {
    display: block;
    margin-left: auto;
}

.feature-copy{
    color: red;
}
#fh5co-about .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.7); /* Cambia la opacidad según sea necesario */
    z-index: 1;
}

#fh5co-about .container {
    position: relative;
    z-index: 2;
}

    </style>
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
			   					<h1 class="heading-section">Formación para Inversoras</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
            
	  	</div>

	</aside>

	<div id="fh5co-about" style="background-image: url('images/fondo-con-logo.jpg'); position: relative;">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="text-center">Nuestros cursos</h1><br><br><br>
        <div class="row" style="display: flex; justify-content: center; align-items: center;">
            <span></span>
            <div class="col-md-6 animate-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-left">
                            <span class="icon icon-green">
                                <i class="icon-cog"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Curso de Gestión Financiera Empresarial</h3>
                                <p>Aprende las mejores prácticas en gestión financiera para empresas, incluyendo análisis de estados financieros, presupuestos, y estrategias de inversión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-left">
                            <span class="icon icon-green">
                                <i class="icon-book"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Curso de Inversión en Bienes Raíces</h3>
                                <p>Descubre cómo invertir de manera inteligente en propiedades inmobiliarias, desde la evaluación de oportunidades hasta la gestión de activos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-left">
                            <span class="icon icon-green">
                                <i class="icon-camera"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Curso de Emprendimiento Social</h3>
                                <p>Conviértete en un emprendedor social exitoso aprendiendo a desarrollar modelos de negocio sostenibles que generen un impacto positivo en la sociedad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-left">
                            <span class="icon icon-green">
                                <i class="icon-heart"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Curso de Desarrollo de Startups</h3>
                                <p>Aprende las habilidades clave para lanzar y hacer crecer una startup, incluyendo la validación de ideas, la estrategia de marketing y la obtención de financiamiento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <img class="img-responsive" style="height: 590px;" src="images/bombillo.jpg">
            </div>
            
        </div>
    </div>
</div>

    @include('administracion.component.testimonio')
    
    <div id="benefits" class="container">
    <h2>¿Qué beneficios tiene formarse con nosotros?</h2>
    <img src="images/formacion.jpg" alt="Imagen Grande" width="700px" class="big-image">
    <h4>A continuación, te presentamos algunos de los beneficios de formarte con nosotros:</h4>
    <ul class="benefits-list">
        <li>Acceso a cursos especializados en áreas clave para el desarrollo profesional.</li>
        <li>Material de estudio actualizado y de alta calidad.</li>
        <li>Clases impartidas por expertos en cada materia, con amplia experiencia en el campo.</li>
        <li>Flexibilidad horaria para adaptarse a tu ritmo de vida y horario laboral.</li>
        <li>Apoyo personalizado y seguimiento por parte de nuestro equipo de tutores y asesores.</li>
        <li>Networking con otros profesionales y estudiantes para fomentar la colaboración y el intercambio de ideas.</li>
        <li>Oportunidades de prácticas y pasantías en empresas líderes del sector.</li>
        <li>Descuentos especiales en eventos, conferencias y actividades relacionadas con tu área de estudio.</li>
    </ul>
</div>

    

	<div id="fh5co-register" style="background-image: url(images/manInver.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Invierte, aprende y crece</h2>
					<h3>¿Qué esperas para crecer?</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>¡Comienza ahora!</strong></p>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
    <!-- Aquí puedes incluir scripts específicos para esta página -->
@endsection
