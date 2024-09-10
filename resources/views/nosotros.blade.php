@extends('layouts.main')

@section('cssp')
    <link href="{{ asset('css/nosotros.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('title','Nosotros')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img1" src="{{ asset('photos/slide2.jpeg') }}"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="titulousalab">
                    <p class="titulonosotrostxt">Nosotros</p>
                    </div>
                    <div class="contenidonosotros">
                    <p class="contenidonosotrostxt">UsaLab, fundado en 2002, se dedica a desarrollar pruebas de usabilidad tanto académicas como en colaboración con universidades de México. Además de realizar pruebas formales y fomentar la usabilidad en sus propios proyectos, ha completado más de 120 desarrollos académicos gratuitos o en convenio con otras instituciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="separador2"></div>
    <div class="misionContent">
        <div class="misionvc">
            <img class="img13" src="{{ asset('photos/img13.png') }}" alt="" srcset="">
            <div class="misionvision">
                <div class="titlemision">Mision</div>
                <div class="separador3"></div>
                <div class="linea1"></div>
                <div class="separador4"></div>
                <div class="misionp">UsaLab se dedica a promover y desarrollar la usabilidad y la interacción humano-computadora (HCI) mediante la investigación, el diseño de interfaces y la optimización de experiencias digitales. Nuestro objetivo es apoyar a la comunidad académica y a la industria para mejorar la accesibilidad y la efectividad de las tecnologías, impactando positivamente en la sociedad.</div>
                <div class="separador5"></div>
                <div class="titlemision">Vision</div>
                <div class="separador3"></div>
                <div class="linea1"></div>
                <div class="separador6"></div>
                <div class="misionp">Ser un referente nacional e internacional en investigación y desarrollo de usabilidad y HCI, liderando proyectos innovadores que contribuyan al avance tecnológico y educativo, y mejorando continuamente la interacción entre personas y tecnología.</div>
            </div>
        </div>
        <div class="fondoazul">
        </div>
    </div>
    <div class="separador2"></div>
    <div class="instalacionesContent">
        <div class="instalacionestitle">Instalaciones</div>
        <div class="separador6"></div>
        <div class="instalacionesp">El Laboratorio de Usabilidad de la Universidad Tecnológica de la Mixteca está equipado con tecnología de vanguardia para la investigación y evaluación de la experiencia del usuario. Contamos con espacios especializados, incluyendo salas de pruebas de usabilidad con sistemas de grabación y seguimiento ocular (eye tracking), áreas de trabajo colaborativo para el desarrollo de prototipos, y un ambiente controlado para realizar estudios de interacción en tiempo real</div>
        <div class="separador6"></div>
        <div class="instalacionesimg">
            <img class="imginst" src="{{ asset('photos/instalacion1.jpeg') }}" alt="" srcset="">
            <img class="imginst" src="{{ asset('photos/instalacion2.jpeg') }}" alt="" srcset="">
            <img class="imginst" src="{{ asset('photos/instalacion3.jpeg') }}" alt="" srcset="">
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
    <div class="separador2"></div>
    <div class="trayectoriaContent">
        
    </div>

@endsection