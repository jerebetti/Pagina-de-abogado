<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? 'gabriel betti ' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? 'Free HTML5 Website Template by FreeHTML5.co' }}" />
    <meta name="keywords" content="{{ $keywords ?? 'free website templates, html5, css3, responsive' }}" />
    <meta name="author" content="FreeHTML5.co" />

    <!-- Metaetiquetas sociales -->
    <meta property="og:title" content="{{ $ogTitle ?? '' }}" />
    <meta property="og:image" content="{{ $ogImage ?? '' }}" />
    <meta property="og:url" content="{{ $ogUrl ?? '' }}" />
    <meta property="og:site_name" content="{{ $ogSiteName ?? '' }}" />
    <meta property="og:description" content="{{ $ogDescription ?? '' }}" />
    <meta name="twitter:title" content="{{ $twitterTitle ?? '' }}" />
    <meta name="twitter:image" content="{{ $twitterImage ?? '' }}" />
    <meta name="twitter:url" content="{{ $twitterUrl ?? '' }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- Agregar preload en el head -->
    <link rel="preload" href="{{ asset('assets/images/fondo2-c.webp') }}" as="image">
    <link rel="preload" href="{{ asset('assets/images/video-amplificado-c.mp4') }}" as="video">

    
    <!-- Preconnect to external resources -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://www.google.com" crossorigin>

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
	

    <!-- Modernizr JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js" defer></script>
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}" defer></script>
	
    <!-- Para IE9 o versiones inferiores -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
<!-- Google tag (gtag.js) el problema que tiene que estar subido
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RF0SL1TR5X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RF0SL1TR5X');
</script>
	-->
</head>
<body>
<div class="gtco-loader"></div>

    <div id="page">
        <nav class="gtco-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div id="gtco-logo"><a href="#page">Gabriel Betti</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1 main-nav">
                        <ul>
                            <li class="active"><a href="#gtco-hero" data-nav-section="home">inicio</a></li>
                            <li><a href="#gtco-about" data-nav-section="about">personal</a></li>
                            <li><a href="#gtco-our-team" data-nav-section="our-team">Casos relevantes</a></li>
                            <li><a href="#gtco-practice-area" data-nav-section="practice-area">titulo y capacitaciones</a></li>
                            <li><a href="#gtco-work" data-nav-section="work">trabajos</a></li>
                            <li class="btn-cta"><a href="#gtco-contact" data-nav-section="contact"><span>Contacto</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

	
	<section id="gtco-hero" class="gtco-cover" style="background-image: url({{ asset('assets/images/fondo2-c.webp') }});" data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="animate-box" data-animate-effect="fadeIn" style="margin-top: 20px;">Lealtad a quien me contrate</h1>

                        <!-- Botón de Play -->
                        <div class="gtco-video-link">
                            <a href="#" id="playButton">
                                <i class="icon-controller-play"></i>
                            </a>
                        </div>

                        <!-- Contenedor del video (inicialmente oculto) -->
                    <div class="gtco-video-container" id="videoContainer" style="display: none;">
                        <button id="closeButton" class="close-button">✖</button>
                        <video id="videoPlayer" controls preload="metadata">
                            <source src="{{ asset('assets/images/video-amplificado-c.mp4') }}" type="video/mp4">
                            Tu navegador no soporta la etiqueta de video.
                        </video>
                    </div>


                    </div>
                </div>
            </div>                                                                                       
        </div>
    </div>
</section>

<script >
document.addEventListener("DOMContentLoaded", function () {
    var playButton = document.getElementById("playButton");
    var videoContainer = document.getElementById("videoContainer");
    var videoPlayer = document.getElementById("videoPlayer");
    var closeButton = document.getElementById("closeButton");

    if (playButton && videoContainer && videoPlayer && closeButton) {
        playButton.addEventListener("click", function (e) {
            e.preventDefault();
            videoContainer.style.display = "flex"; // Muestra el video
            videoPlayer.play();
            playButton.style.display = "none"; // Oculta el botón Play
        });

        closeButton.addEventListener("click", function () {
            videoContainer.style.display = "none"; // Oculta el video
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
            playButton.style.display = "flex"; // Vuelve a mostrar el botón Play
        });
    }
});
</script>	

	<section id="gtco-about" data-section="about">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Gabriel Eduardo Betti</h1>
					<p class="sub">Gabriel es un abogado de reconocida trayectoria en el ámbito jurídico, académico y público, con una destacada dedicación a la asesoría de empresas, asociaciones y fundaciones. Su compromiso con la justicia, la mediación y el desarrollo de comunidades locales ha dejado una huella imborrable en cada una de sus contribuciones.</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/img-gabi-c.webp') }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="heading-colored">Dedicacion &amp; honestidad</h2>
					<p>Gabriel reside en Bombal, una pintoresca localidad ubicada en el sur de la provincia de Santa Fe, Argentina. Este pequeño pero vibrante pueblo, conocido por su espíritu comunitario y sus raíces agrícolas, ha sido el escenario donde Gabriel ha desarrollado gran parte de su carrera y contribuciones.

Desde Bombal, Gabriel no solo ejerce como Juez de Faltas, sino que también brinda asesoramiento jurídico a numerosas organizaciones y empresas de la región. Su profundo compromiso con el desarrollo local lo ha llevado a desempeñar un papel clave en el fortalecimiento institucional y comunitario.

A lo largo de los años, ha sabido combinar su amor por el derecho con su pasión por el bienestar de la comunidad que lo rodea, convirtiéndose en una figura fundamental en Bombal y las localidades vecinas. Su trabajo ejemplifica el valor del liderazgo profesional en un entorno cercano y colaborativo.</p>
					
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-our-team" data-section="our-team">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Casos relevantes</h1>
					<p class="sub">A lo largo de su destacada trayectoria,El doctor ha participado en casos judiciales de gran relevancia, dejando una marca significativa en el ámbito local, provincial y nacional.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">casos</p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/beligoy-c.webp') }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
					</div>     
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>"Aqui se transcribe a titulo ejemplificativo una nota del diario de la capital de rosario en el suplemento ovacion con echos de relevancias nacional "</h2>
					<h3> Liga interprovincial,"no le ofreci nada" </h3>
					<p>Beligoy acusó a Ruoppulo de ofrecerle una coima de trece mil pesos para influir en el resultado del partido en favor del club Cafferatense, lo que llevó a la suspensión del encuentro antes de su inicio. A pesar de las denuncias, Ruoppulo ha negado tajantemente las acusaciones, afirmando que la historia fue inventada por Beligoy. Además, destacó que, después de la conversación con el árbitro, éste pidió ser trasladado a la cancha para hablar con sus superiores, y que nunca hubo una oferta de soborno.</p>
					<p>El caso fue investigado por la justicia, y la controversia se ha intensificado debido a la falta de sanciones al club de Cafferata, lo que algunos consideran como una indicación de que los hechos no fueron tan graves como inicialmente se pensaba. El abogado defensor de Ruoppulo, Oscar Berra Giuliano, sostiene que si el caso hubiese tenido la gravedad que se alegó, el partido no se habría jugado en la misma cancha. Así, el conflicto sigue siendo objeto de debate, tanto en el ámbito legal como en el deportivo, con implicaciones aún por determinar. </p>
				</div>
			</div>

			<div class="row team-item gtco-team">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/viviendas-c.webp') }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>"Nota transcripta del diario la palabra de Bombal"</h2>
					<h3>Remate de dos viviendas</h3>
					<p>Gabriel Betti, un abogado de Bombal, logró una victoria significativa al conseguir que los tribunales de Casilda y Firmat suspendieran los remates de dos viviendas pertenecientes a sus clientes, quienes enfrentaban deudas que él consideraba irrisorias. En el primer caso, relacionado con una propiedad ubicada en Rivadavia al 2000 en Chabás, el remate estaba programado por una deuda de tan solo 44 mil pesos, cifra que el abogado consideró injusta. De igual forma, en Bombal, una vivienda situada en la calle Estanislao López al 600 iba a ser subastada por una deuda de más de 10 mil pesos. Gracias a la intervención legal de Betti, ambas subastas fueron suspendidas, lo que permitió que sus clientes conservaran sus viviendas.</p>
					<p>Betti subrayó la relevancia de defender los derechos de aquellos que se encuentran en situaciones vulnerables, como los que enfrentan el riesgo de perder sus hogares debido a deudas mínimas. Calificó de "indignante" que se intentara despojar a las personas de sus casas por montos tan bajos y destacó el gran impacto social que tales acciones pueden tener, ya que afectan directamente a las familias involucradas. Además, resaltó la importancia de no ceder ante acciones abusivas y de buscar justicia. Los escritos legales presentados ante los tribunales fueron claves para lograr la suspensión de los remates, y Betti concluyó con un mensaje de esperanza, reafirmando el valor de la defensa legal y la posibilidad de obtener justicia incluso en situaciones complicadas.</p>
				</div>
			</div>

		</div>
	</section>

	<section id="gtco-practice-area" data-section="practice-area">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn" >
					<h1>Titulo y capacitaciones</h1>
					<p class="sub">Con su enfoque constante en la formación profesional, ha participado en múltiples cursos y seminarios, lo que le ha permitido mantenerse actualizado y ofrecer asesoramiento jurídico de calidad.</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Titulo habilitante</h3>
							<p>Otorgado por: Universidad Nacional de Rosario</p>
							<p>Fecha de Título: 29/04/1999</p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Curso de Posgrado en Mediación</h3>
							<p>Institución: Fundación Fraternitas</p>
                            <p>Carga Horaria: 160 horas</p>
                            <p> Evaluación: Aprobado</p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Especialización en Mediación</h3>
							<p>Institución: Secretaría de Justicia de la Provincia de Santa Fe</p>
							<p>Inscripción: Registro de Mediadores y Comediadores de la Provincia de Santa Fe</p>
						</div>
					</div>
                    <div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Cursos de Actualización en el Ministerio Público</h3>
							<p>Participación en el curso de 97 horas cátedra en la Pontificia Universidad Católica de Rosario.</p>
						</div>
					</div>
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Seminarios y Jornadas en Derecho Civil, Comercial y Pena</h3>
							<p>Asistencia a seminarios organizados por la Universidad Nacional de Rosario y el Colegio de Abogados de Rosario.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Jornadas sobre la Reforma del Código Civil y la Nueva Ley de Tránsito</h3>
							<p>Participación activa en jornadas sobre estos temas de relevancia para el ámbito jurídico.</p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Especialización en Derecho Procesal Concursal</h3>
							<p>Formación avanzada en Derecho Procesal Concursal en la Universidad Católica y Ciencias Sociales de Rosario.</p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Cursos y Seminarios sobre Mediación Penal, Familiar y Negociación Creativa</h3>
							<p>Capacitación en técnicas de mediación en la Fundación Fraternitas.</p>
						</div>
					</div>
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Seminario sobre el Instituto de Derecho Jurisdiccional, Conciliación y Arbitraje</h3>
							<p>Asistencia al seminario organizado por el Colegio de Abogados de Rosario.</p>
						</div>
					</div>
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="{{ asset('assets/images/logo1-c.webp') }}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
						</div>
						<div class="gtco-copy">
							<h3>Seminario sobre el Nuevo Código Civil y Comercial Unificado</h3>
							<p>Seminario intensivo organizado por el Colegio de Abogados de Firmat sobre el Nuevo Código Civil y Comercial.</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

   <section id="gtco-work" data-section="work">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Trabajos</h1>
					<p class="sub">Su destacada trayectoria combina experiencia en la administración pública y un extenso rol como asesor jurídico en diversas empresas, asociaciones y fundaciones. Desde su posición como Juez de Faltas en Bombal hasta su participación como asesor en distintas comunas, su labor se ha centrado en brindar soluciones legales integrales, demostrando un compromiso sólido con el ámbito público y privado.</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="{{ asset('assets/images/juez-1100x800-c.webp') }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" loading="lazy">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="heading-colored">Experiencia en la Administración Pública &amp; Asesoramiento Jurídico Integral</h2>
					<p>Desde el 14 de febrero de 2014, se desempeña como Juez de Faltas en la localidad de Bombal, en el ámbito de la Administración Pública Municipal, cargo que continúa ejerciendo en la actualidad.</p>
					<p>Además, su labor se extiende al ámbito privado, donde ha desempeñado un rol clave como asesor jurídico en diversas empresas, asociaciones y fundaciones, entre las que se destacan Gorgerino Agropartes SRL, el Sindicato de Aceiteros Bombal y UATRE Bombal. También ha brindado asesoramiento a la Comuna de Bombal y a otras administraciones como la Comuna de Chabás (gestión 2013-2015), la Comuna de Melincué (gestión Pernigotti) y la Municipalidad de Miguel Torres (gestión David Segura). Su experiencia incluye la asesoría a organizaciones como SAMCo Bombal, Organización Bombal Seguros, Team Sport Bombal, First Sport Bombal y Transportadores Rurales Argentinos Bombal, así como a empresas constructoras de Rosario y compañías de transporte de carga en general entre otros.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-contact" data-section="contact">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Contacto</h1>
					<p class="sub">Contáctanos para recibir asesoramiento legal personalizado y soluciones a medida para tus necesidades jurídicas.</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
						
				
				@if (session('success'))
                 <p style="color: green;">{{ session('success') }}</p>
                 @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
	<form id="demo-form" action="/formulario#gtco-contact" method="POST">
    @csrf
    <div class="form-group">
            <p><label for="name">Nombre y apellido:</label></p>
            <input type="text" name="name" class="form-control" placeholder="Ej: Pedro Gonzalez" id="name">
            <span class="error-message" style="color: red;"></span>
        </div>
        <div class="form-group">
            <p><label for="email">Dirección de correo electrónico:</label></p>
            <input type="text" name="email" class="form-control" placeholder="Ej: PedroGonzalez@gmail.com" id="email">
            <span class="error-message" style="color: red;"></span>
        </div>
        <div class="form-group">
            <p><label for="numero">Número de teléfono:</label></p>
            <input type="text" name="numero" class="form-control" placeholder="Ej: 5434247890" id="numero">
            <span class="error-message" style="color: red;"></span>
        </div>
        <div class="form-group">
            <p><label for="message">Mensaje para el doctor:</label></p>
            <textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Ej: Doctor, tenía una consulta sobre daños y perjuicios"></textarea>
            <span class="error-message" style="color: red;"></span>
        </div>

    <div>
        <p style="color: black; font-weight: bold;">*Todos los campos son obligatorios.</p>
    </div>

    <!-- Botón de envío con reCAPTCHA -->
    <div class="form-group">
        <button id="submit-btn" class="btn btn-primary g-recaptcha"
            data-sitekey="6LcHR88qAAAAAJfCFUneqezams3M2LI-aVDMsuBl"
            data-callback="onSubmit"
            data-action="submit">
            Enviar el mensaje
        </button>
    </div>
</form>

<!-- Cargar reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcHR88qAAAAAJfCFUneqezams3M2LI-aVDMsuBl"  defer></script>

<script >
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById("demo-form");
    const submitBtn = document.getElementById("submit-btn");
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const numeroInput = document.getElementById('numero');
    const messageTextarea = document.getElementById('message');

    const setError = (input, message) => {
        const errorElement = input.nextElementSibling;
        errorElement.innerText = message;
        input.style.borderColor = 'red';
    };

    const clearError = (input) => {
        const errorElement = input.nextElementSibling;
        errorElement.innerText = '';
        input.style.borderColor = '';
    };

    const validateName = () => {
        const nameRegex = /^[a-zA-Z\s]+$/;
        const nameValue = nameInput.value.trim();
        if (nameValue === '') {
            setError(nameInput, 'El campo de nombre es obligatorio.');
            return false;
        } else if (!nameRegex.test(nameValue)) {
            setError(nameInput, 'El nombre solo puede contener letras y espacios.');
            return false;
        } else if (nameValue.length > 50) {
            setError(nameInput, 'El nombre no puede tener más de 50 caracteres.');
            return false;
        } else {
            clearError(nameInput);
            return true;
        }
    };

    const validateEmail = () => {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const emailValue = emailInput.value.trim();
        if (emailValue === '') {
            setError(emailInput, 'El campo de email es obligatorio.');
            return false;
        } else if (!emailRegex.test(emailValue)) {
            setError(emailInput, 'El email debe ser una dirección válida.');
            return false;
        } else if (emailValue.length > 50) {
            setError(emailInput, 'El email no puede tener más de 50 caracteres.');
            return false;
        } else {
            clearError(emailInput);
            return true;
        }
    };

    const validateNumero = () => {
        const numeroRegex = /^\d+$/;
        const numero = numeroInput.value.trim();
        if (numero === '') {
            setError(numeroInput, 'El campo de número de teléfono es obligatorio.');
            return false;
        } else if (!numeroRegex.test(numero)) {
            setError(numeroInput, 'El número de teléfono solo puede contener números.');
            return false;
        } else if (numero.length < 8 || numero.length > 12) {
            setError(numeroInput, 'El número de teléfono debe tener entre 8 y 12 dígitos.');
            return false;
        } else {
            clearError(numeroInput);
            return true;
        }
    };

    const validateMessage = () => {
        const messageValue = messageTextarea.value.trim();
        if (messageValue === '') {
            setError(messageTextarea, 'El campo de mensaje es obligatorio.');
            return false;
        } else if (messageValue.length < 15) {
            setError(messageTextarea, 'El mensaje debe tener al menos 15 caracteres.');
            return false;
        } else if (messageValue.length > 200) {
            setError(messageTextarea, 'El mensaje no puede tener más de 200 caracteres.');
            return false;
        } else {
            clearError(messageTextarea);
            return true;
        }
    };

    submitBtn.addEventListener('click', function (event) {
        event.preventDefault();
        const isFormValid = validateName() & validateEmail() & validateNumero() & validateMessage();
        if (!isFormValid) {
            alert('Por favor, corrige los errores en el formulario.');
            return;
        }

        // Ejecutar reCAPTCHA cuando esté listo
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcHR88qAAAAAJfCFUneqezams3M2LI-aVDMsuBl', { action: 'submit' })
                .then(function (token) {
                    console.log("reCAPTCHA validado correctamente.");
                    
                    // Agregar token al formulario antes de enviarlo
                    let input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'g-recaptcha-response';
                    input.value = token;
                    form.appendChild(input);

                    // Enviar formulario
                    form.submit();
                });
        });
    });
});
</script>

	<!-- de 40 a 65 de rendimiento y antes estaba 30,doy por finalizado la optimizacion.-->

				</div>
				<div class="col-md-4 col-md-pull-6 animate-box">
					<div class="gtco-contact-info">
						<ul>						
						    <li class="address">
                               <a href="https://www.google.com/maps/search/?api=1&query=Vera+Mujica+577,+S2179+Bombal,+Santa+Fe" target="_blank">Vera Mujica 577, S2179 Bombal, Santa Fe</a></li>
							   <li class="phone"><a href="tel://549346540-8026">+54 9 346 540-8026</a></li>
							   <li class="email"><a href="mailto:paginadegabrielbetti@gmail.com">paginadegabrielbetti@gmail.com</a></li>						
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="gtco-footer" role="contentinfo">
		<div class="container">		
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2025 Jeremias Betti. All Rights Reserved.</small> 
						<small class="block">Designed by Jeremias Betti </small>
				<!--	<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
					</p>					
				</div>
			</div>
		</div>
	</footer>

	<!-- Scripts JS -->
	<script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.easing.1.3.js')}}" defer></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/magnific-popup-options.js')}}" defer></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}" defer></script>
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}" defer></script>
	<script src="{{ asset('assets/js/main.js') }}" defer></script>
	<script src="https://www.google.com/recaptcha/api.js?render=6LcHR88qAAAAAJfCFUneqezams3M2LI-aVDMsuBl" defer></script>
	
	<!-- todo el codigo html fue enviado al corrector y esta perfecto -->
</body>
</html>
