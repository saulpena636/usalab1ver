@extends('layouts.main')

@section('cssp')
<link href="{{ asset('css/investigacion.css') }}" type="text/css" rel="stylesheet">

<!-- Hoja de estilos de la sección "Proyectos actuales" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/proyectos-actuales.css') }}">

<!-- Hoja de estilos de la sección "Publicaciones" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/publicaciones.css') }}">

<!-- Hoja de estilos de la sección "Líneas de investigación" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/lineas-de-investigacion.css') }}">

<!-- Hoja de estilos de la sección "Investigaciones más destacadas" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/investigaciones-mas-destacadas.css') }}">

<!-- Hoja de estilos de la sección "Hablanos" -->
<link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

@section('title','Investigación')

@section('content')
    <!-- Contenedor para la ventana Investigación -->
    <div class="investigacion-window-container">
        <!-- Contenedor para la sección "Investigación" (Titulo y descripción) -->
        <div class="investigacion-container">
            <!-- Titulo "Investigeación -->
            <div class="investigacion-title">Investigaciones</div>
            <!-- Contenedor para la descripción de la página Investigación -->
            <div class="investigacion-content">
                <!-- Descripción -->
                <div class="investigacion-text">La investigación en UsaLab impulsa el avance en usabilidad e interacción humano-computadora (HCI). Nos enfocamos en contribuir al ámbito académico y ofrecer soluciones innovadoras para desafíos en el diseño de sistemas y productos interactivos, explorando nuevas metodologías y evaluando tecnologías emergentes.</div>
            </div>
        </div>

        <!-- Sección "Proyectos actuales" -->
        <x-investigacion.proyectos-actuales/>

        <!-- Sección "Publicaciones" -->
        <x-investigacion.publicaciones/>

        <!-- Sección "Líneas de investigación" -->
        <x-investigacion.lineas-de-investigacion/>

        <!-- Sección "Investigaciones más destacadas" -->
        <x-investigacion.investigaciones-mas-destacadas />

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection