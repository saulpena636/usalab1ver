@extends('layouts.main')

@section('cssp')
<link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('title','Pagina de inicio')

@section('content')
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('photos/slide1.png') }}"
              alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <p class="titulousalab">UsaLab</p>
              <p class="titulousalab">Laboratorio de Usabilidad</p>
              <div class="contenidousalab">
                <p class="contenidousalabtxt">Es un laboratorio de la Universidad Tecnológica de la Mixteca (UTM)
                  especializado en usabilidad e interacción humano-computadora (HCI). Se dedica a investigar, diseñar y
                  optimizar interfaces y sistemas interactivos, asegurando que sean accesibles e intuitivos.</p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="separador2"></div>
      <div class="cards-container">

        <div id="nuestros-servicios-card" class="card">
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
          <div id="nuestros-servicios-title" class="title-card">Nuestros Servicios</div>
          <div class="card-button">Más Información</div>
        </div>

        <div id="nosotros-card" class="card">
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
          <div id="nosotros-title" class="title-card">Nosotros</div>
          <div class="card-button">Más Información</div>
        </div>

        <div id="investigacion-card" class="card">
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
          <div id="investigacion-title" class="title-card">Investigacion</div>
          <div class="card-button">Más Información</div>
        </div>

      </div>
      <div class="fondo-azul">
      </div>
      <div class="ultimoseventostxt">Últimos Eventos</div>
      <div class="eventosContainer">
        <div id="event1-card" class="event-card">
          <div id="event1" class="content-event-card">
            <div class="title-event-card">HCI</div>
            <div class="text-event-card">Descubra qué es la Interacción Humano-Computadora y en qué se centra el estudio
            </div>
          </div>
        </div>

        <div id="event2-card" class="event-card">
          <div id="event2" class="content-event-card">
            <div class="title-event-card">Concurso de Diseño Estudiantil en CHI 2025</div>
          </div>
        </div>

        <div id="event3-card" class="event-card">
          <div id="event3" class="content-event-card">
            <div class="title-event-card">Ferias tecnológicas</div>
          </div>
        </div>
      </div>
      <div class="desarrollocomercial">
        <img src="{{ asset('img/image 21.png') }}" class="imagenmundo1" alt="" srcset=""></img>
        <div class="desarrollotitulo">Desarrollo Comercial</div>
        <div class="desarrollocontenido">Profesionalizamos nuestro servicio, adoptamos estándares de la industria.
          Aprendimos y adoptamos una cultura de negocios sin perder de vista nuestros orígenes académicos que mantenemos
          en alta estima.</div>
        <div class="separador5"></div>
        <div class="card-button">Más Información</div>
      </div>

      <div class="separador3"></div>
      <div class="clientesdiv">
        <div class="clientes-title">Clientes</div>
      </div>
      <div class="separador4"></div>
      <div class="clientesContainer">
        <div class="clientes-container">
          <div class="img-wrapper"></div>
        </div>
      </div>

      <div class="separador2"></div>
      <div class="equipoCont">
        <div class="equipotitle">Equipo a cargo</div>
        <div class="eq">
          <div class="eq1">
            <img src="{{ asset('photos/image1.png') }}" alt="" srcset="">
            <div class="nome1">Ing. Carlos Alberto Martinez Sandoval</div>
          </div>
          <div class="eq1">
            <img src="{{ asset('photos/image2.png') }}" alt="" srcset="">
            <div class="nome2">Ing. David del Castillo Lale</div>
          </div>
        </div>
      </div>

      <div class="separador4"></div>
      <div class="hablanosContainer">
        <div class="hablanos">
          <div class="hablanos-title">Háblanos de tú proyecto</div>
          <div class="hablanos-text">Nos gustaría conocer tu proyecto. Háblanos un poco más para desarrollar un plan de
            investigación que se ajuste a tus necesidades.</div>
          <div class="hablanos-button">Hablemos</div>
        </div>
      </div>

      <div class="separador5"></div>
      <div class="lineContainer">
        <div class="line">
          <svg xmlns="http://www.w3.org/2000/svg" width="1418" height="4" viewBox="0 0 1418 4" fill="none">
            <path d="M0 2H1418" stroke="#BFBFBF" stroke-opacity="0.2" stroke-width="3" />
          </svg>
        </div>
      </div>
      <div class="separador5"></div>

      @endsection