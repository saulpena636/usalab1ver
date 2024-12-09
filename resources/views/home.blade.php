<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')

<!-- Agregamos el CSS de la página -->
@section('cssp')
<link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

<!-- Titulo de la pestaña de la página -->
@section('title','Pagina de inicio')

<!-- Empieza el contenido de la página -->
@section('content')

@section('img')
<div class="carousel-item active">
    <img class="d-block w-10 img1" src="{{ asset('photos/slide1.png') }}" alt="First slide">
</div>
<div class="carousel-item">
    <img class="d-block w-10 img1" src="{{ asset('photos/slide3.png') }}" alt="Second slide">
</div>
<div class="carousel-item">
    <img class="d-block w-10 img1" src="{{ asset('photos/slide4.png') }}" alt="Third slide">
</div>
<div class="carousel-item">
    <img class="d-block w-10 img1" src="{{ asset('photos/slide8.png') }}" alt="Fourth slide">
</div>
@endsection

@section('tituloc')
UsaLab<br /><br>Laboratorio de Usabilidad
@endsection

@section('contc','Es un laboratorio de la Universidad Tecnológica de la Mixteca (UTM)
                      especializado en usabilidad e interacción humano-computadora (HCI). Se dedica a investigar,
                      diseñar y
                      optimizar interfaces y sistemas interactivos, asegurando que sean accesibles e intuitivos.')

<div class="separador2"></div>

<!-- Seccion principal de tarjetas (Nuestros servicios, Nosotros, Investigacion) -->
<div class="cards-container">
  <!-- Tarjeta "Nuestros servicios" -->
  <div id="nuestros-servicios-card" class="card">
    <!-- Figura de la tarjeta -->
    <div class="card-figure">
      <svg xmlns="http://www.w3.org/2000/svg" width="448" height="290" viewBox="0 0 448 290" fill="none">
        <g filter="url(#filter0_d_7_16)">
          <path
            d="M444 77.1384C444 190.284 162.006 259.507 13.0174 281.691C8.20709 282.408 4 278.654 4 273.79V8C4 3.58172 7.58171 0 12 0H436C440.418 0 444 3.5813 444 7.99958V77.1384Z"
            fill="currentColor" fill-opacity="0.9" shape-rendering="crispEdges" />
        </g>
        <defs>
          <filter id="filter0_d_7_16" x="0" y="0" width="448" height="289.779" filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
              result="hardAlpha" />
            <feOffset dy="4" />
            <feGaussianBlur stdDeviation="2" />
            <feComposite in2="hardAlpha" operator="out" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7_16" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7_16" result="shape" />
          </filter>
        </defs>
      </svg>
    </div>
    <!-- Titulo de la tarjeta -->
    <div id="nuestros-servicios-title" class="title-card">Nuestros Servicios</div>
    <!-- Boton "mas informacion" -->
    <div class="card-button">Más Información</div>
  </div>

  <!-- Terjeta "Nosotros" -->
  <div id="nosotros-card" class="card">
    <!-- Figura de la tarjeta -->
    <div class="card-figure">
      <svg xmlns="http://www.w3.org/2000/svg" width="448" height="290" viewBox="0 0 448 290" fill="none">
        <g filter="url(#filter0_d_7_16)">
          <path
            d="M444 77.1384C444 190.284 162.006 259.507 13.0174 281.691C8.20709 282.408 4 278.654 4 273.79V8C4 3.58172 7.58171 0 12 0H436C440.418 0 444 3.5813 444 7.99958V77.1384Z"
            fill="currentColor" fill-opacity="0.9" shape-rendering="crispEdges" />
        </g>
        <defs>
          <filter id="filter0_d_7_16" x="0" y="0" width="448" height="289.779" filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
              result="hardAlpha" />
            <feOffset dy="4" />
            <feGaussianBlur stdDeviation="2" />
            <feComposite in2="hardAlpha" operator="out" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7_16" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7_16" result="shape" />
          </filter>
        </defs>
      </svg>
    </div>
    <!-- titulo de la tarjeta -->
    <div id="nosotros-title" class="title-card">Nosotros</div>
    <!-- Boton "Mas infromacion" -->
    <div class="card-button">Más Información</div>
  </div>

  <!-- Tarjeta "Investigacion" -->
  <div id="investigacion-card" class="card">
    <!-- Figura de la tarjeta -->
    <div class="card-figure">
      <svg xmlns="http://www.w3.org/2000/svg" width="448" height="290" viewBox="0 0 448 290" fill="none">
        <g filter="url(#filter0_d_7_16)">
          <path
            d="M444 77.1384C444 190.284 162.006 259.507 13.0174 281.691C8.20709 282.408 4 278.654 4 273.79V8C4 3.58172 7.58171 0 12 0H436C440.418 0 444 3.5813 444 7.99958V77.1384Z"
            fill="currentColor" fill-opacity="0.9" shape-rendering="crispEdges" />
        </g>
        <defs>
          <filter id="filter0_d_7_16" x="0" y="0" width="448" height="289.779" filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
              result="hardAlpha" />
            <feOffset dy="4" />
            <feGaussianBlur stdDeviation="2" />
            <feComposite in2="hardAlpha" operator="out" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7_16" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7_16" result="shape" />
          </filter>
        </defs>
      </svg>
    </div>
    <!-- Titulo de la tarjeta -->
    <div id="investigacion-title" class="title-card">Investigacion</div>
    <!-- Boton "Mas informacion" -->
    <div class="card-button">Más Información</div>
  </div>
</div>
<!-- Termina seccion principal de tarjetas -->

<!-- Campo del fondo de las tarjetas de la pagina -->
<div class="fondo-azul">
</div>
<!-- Seccion ultimos eventos -->
<div class="ultimoseventostxt">Últimos Eventos</div>
<div class="eventosContainer">
  <!-- Tarjeta HCI -->
  <div id="event1-card" class="event-card">
    <div id="event1" class="content-event-card">
      <!-- Titulo y contenido de la tarjeta -->
      <div class="title-event-card">HCI</div>
      <div class="text-event-card">Descubra qué es la Interacción Humano-Computadora y en qué se centra el estudio
      </div>
    </div>
  </div>

  <!-- Tarjeta CHI -->
  <div id="event2-card" class="event-card">
    <div id="event2" class="content-event-card">
      <!-- Titulo de la tarjeta -->
      <div class="title-event-card">Concurso de Diseño Estudiantil en CHI 2025</div>
    </div>
  </div>

  <!-- Tarjeta Ferias -->
  <div id="event3-card" class="event-card">
    <div id="event3" class="content-event-card">
      <!-- Titulo de la tarjeta -->
      <div class="title-event-card">Ferias tecnológicas</div>
    </div>
  </div>
</div>
<!-- Termina seccion ultimos eventos -->

<!-- Sección "Bienvenidos a UsaLab" -->
<div class="bienvenidos-a-usalab-container">
  <!-- Titulo "Bienvenidos a UsaLab" -->
  <div class="bienvenidos-a-usalab-title">¡Bienvenidos a UsaLab!</div>
  <!-- Contenido de la sección -->
  <div class="content-bienvenidos-a-usalab">
    <!-- Texto de la sección -->
    <div class="bienvenidos-a-usalab-text">En el Laboratorio de Usabilidad, nuestra pasión es poner al usuario en el centro de todo lo que hacemos. Creemos que la tecnología debe ser accesible, intuitiva y capaz de enriquecer la vida de las personas.</div>
  </div>
</div>
<!-- Termina la sección "Bienvenidos a UsaLab" -->

<!-- Sección "Nuestra Historia" -->
<div class="nuestra-historia-container">
  <!-- Titulo "Nuestra Historia" -->
  <div class="nuestra-historia-title">Nuestra Historia</div>
  <!-- Contenido de la sección -->
  <div class="content-nuestra-historia">
    <!-- Texto de la sección -->
    <div class="nuestra-historia-text">Actualmente, estamos involucrados en proyectos emocionantes que combinan investigación y diseño para mejorar la experiencia del usuario. Desde el desarrollo de prototipos hasta la realización de pruebas de usabilidad</div>
  </div>
</div>
<!-- Termina la sección "Nuestra Historia" -->

<!-- Sección "Experiencias" -->
<div class="experiencias-container">
  <!-- Titulo "Experiencias" -->
  <div class="experiencias-title">Experiencias</div>
  <!-- Contenido de la sección -->
  <div class="content-experiencias">
    <!-- Texto de la sección -->
    <div class="experiencias-text">Hemos estado creando prototipos interactivos que permiten a los usuarios experimentar y dar retroalimentación sobre ideas iniciales. Esto ayuda a identificar mejoras antes de la implementación final.</div>
  </div>
</div>
<!-- Termina la sección "Experiencia" -->

<!-- Seccion Desarrollo comercial -->
<div class="desarrollocomercial">
  <!-- Imagen de fondo -->
  <img src="{{ asset('img/image 21.png') }}" class="imagenmundo1" alt="" srcset=""></img>
  <!-- Titulo "Desarrollo comercial" -->
  <div class="desarrollotitulo">Desarrollo Comercial</div>
  <!-- Contenido desarrollo comercial -->
  <div class="desarrollocontenido">Profesionalizamos nuestro servicio, adoptamos estándares de la industria.
    Aprendimos y adoptamos una cultura de negocios sin perder de vista nuestros orígenes académicos que mantenemos
    en alta estima.</div>
  <div class="separador5"></div>
  <div class="card-button">Más Información</div>
</div>

<div class="separador2"></div>

<!-- Titulo clientes -->
<div class="clientesdiv">
  <div class="clientes-title">Clientes</div>
</div>
<!-- Termina titulo clientes -->

<div class="separador5"></div>

<!-- Seccion clientes -->
<div class="clientesContainer">
  <div class="clientes-container">
    <div class="img-wrapper"></div>
  </div>
</div>
<!-- Termina seccion clientes -->

<div class="separador2"></div>

<!-- Seccion equipo a cargo -->
<div class="equipoCont">
  <div class="equipotitle">Equipo a cargo</div>
  <div class="eq">
    <div class="eq1">
      <img src="{{ asset('photos/image2.png') }}" alt="" srcset="">
      <div class="nome1">Ing. Carlos Alberto Martinez Sandoval</div>
    </div>
    <div class="eq1">
      <img src="{{ asset('photos/image1.png') }}" alt="" srcset="">
      <div class="nome2">Ing. David del Castillo Lale</div>
    </div>
  </div>
</div>
<!-- Termina seccion equipo a cargo -->

<div class="separador2"></div>

<!-- Seccion hablanos -->
<x-hablanos />
<!-- Termina seccion hablanos -->
 
<div class="separador6"></div>

<script>
  declare var $;
  $('.carousel').carousel()
</script>

@endsection