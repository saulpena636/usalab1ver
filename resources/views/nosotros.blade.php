@extends('layouts.main')

@section('cssp')
    <link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('title','Nosotros')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('photos/slide1.png') }}"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="titulousalab">
                    <p class="titulousalabtxt">Nosotros</p>
                    </div>
                    <div class="contenidousalab">
                    <p class="contenidousalabtxt">UsaLab, fundado en 2002, se dedica a desarrollar pruebas de usabilidad tanto académicas como en colaboración con universidades de México. Además de realizar pruebas formales y fomentar la usabilidad en sus propios proyectos, ha completado más de 120 desarrollos académicos gratuitos o en convenio con otras instituciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection