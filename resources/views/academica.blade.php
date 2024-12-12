<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')

<!-- Agregamos el CSS de la página -->
@section('cssp')
    <link href="{{ asset('css/academica.css') }}" type="text/css" rel="stylesheet">
@endsection

<!-- Titulo de la pestaña de la página -->
@section('title', 'Formacion Academica')

<!-- Empieza el contenido de la página -->
@section('content')


    <!-- Carrusel de la página principal -->

    @section('img')
<div class="carousel-item active">
    <img class="d-block w-10 img1" src="{{ asset('photos/slide5.png') }}" alt="First slide">
</div>

@endsection

@section('tituloc')
Formacion Académica
@endsection

@section('contc','En UsaLab, los estudiantes pueden participar en proyectos reales, realizar prácticas profesionales, colaborar en investigaciones y asistir a talleres. Estas actividades te permitirán aplicar tus conocimientos y desarrollar habilidades clave en el campo de la usabilidad.')

    <!-- Termina carrusel de la pagina principal -->
    <div class="separador2"></div>
    <!-- Seccion pruebas de Usabilidad -->
    <div class="pruebausalab" id="pruebausalab">
        <div class="pruebausalabtxt">
            <div class="linea1"></div>
            <div class="pruebausalabtitle">Pruebas de Usabilidad</div>
            <div class="pruebausalabp">Este programa ofrece formación integral en la planificación, realización y análisis de pruebas de usabilidad. Está diseñado para capacitar a estudiantes y profesionales en el desarrollo de evaluaciones que midan la interacción de los usuarios con productos o interfaces, con el fin de mejorar la experiencia del usuario.</div>
        </div>
        <img class="pruebausalabimg" src="{{ asset('photos/prueba1.jpeg') }}" alt="" srcset="">
    </div>
    <div class="separador3"></div>
    <div class="tarjetas"></div>
    <div class="separador2"></div>
    <!-- Seccion Pruebas en laboratorio -->
    <div class="pruebaslaboratorio">
        <div class="pruebaslaboratoriotitle">Pruebas en Laboratorio</div>
        <div class="pruebaslaboratoriotxt">
            <div class="linea2"></div>
            <div class="pruebaslaboratoriop">En un laboratorio de usabilidad, los usuarios realizan tareas específicas mientras expertos observan y graban su comportamiento para identificar problemas de usabilidad. Las pruebas se realizan en un entorno controlado, diseñado para minimizar distracciones. Los evaluadores monitorean la interacción del usuario con el producto, evaluando tiempo de respuesta, navegación, errores y frustraciones. Además, pueden grabarse gestos y expresiones faciales para obtener una visión más profunda de la experiencia del usuario.</div>
        </div>
    </div>
    <div class="separador2"></div>
    <img class="pruebas1" src="{{ asset('photos/pruebas1.png') }}" alt="">
    <div class="separador2"></div>

    <!-- Seccion Pruebas de Usabilidad con Prototipos -->
    <div class="usabilidad">
        <div class="usabilidadtitle">Pruebas de Usabilidad con Prototipos</div>
        <div class="usabilidadcont">
            <div class="linea2"></div>
            <div class="usabilidadp">Permiten evaluar versiones preliminares de un producto, ya sean bocetos simples o modelos avanzados, antes de su desarrollo final. Este método ayuda a identificar problemas de usabilidad de forma temprana, permitiendo ajustes rápidos y eficaces en el diseño. Los usuarios interactúan con los prototipos para realizar tareas específicas, mientras los evaluadores observan sus comportamientos y dificultades. Esto permite refinar el producto según las necesidades y expectativas de los usuarios, optimizando la experiencia de uso antes de que el producto esté completamente desarrollado.</div>
        </div>
    </div>
    <div class="separador3"></div>
    <img class="pruebas2" src="{{ asset('photos/pruebas2.jpeg') }}" alt="">
    <div class="separador2"></div>

    <!-- Seccion Evaluacion Heuristica -->
    <div class="heuristica">
        <div class="heuristicatitle">Evaluación Heurística</div>
        <div class="heuristicacont">
            <div class="linea2"></div>
            <div class="heuristicap">Es un método experto que analiza la interfaz de un producto o sistema mediante el uso de principios de usabilidad, llamados heurísticas. Este enfoque permite a especialistas en usabilidad identificar problemas de diseño de manera rápida y eficaz, sin la necesidad de pruebas directas con usuarios. Los evaluadores examinan la interfaz en busca de violaciones a estos principios clave, proporcionando recomendaciones para optimizar la experiencia del usuario y mejorar la interacción, todo antes de que el producto llegue a manos de los usuarios finales.</div>
        </div>
    </div>

    <!-- Carrusel Practicas profesionales -->
     <div class="practicaprofesional" id="practicas"></div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="practicas">
            <div class="carousel-item active">
                <!-- Imagenes del carrusel -->
                <img class="d-block w-100 img1" src="{{ asset('photos/slide6.png') }}"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Titulo del carrusel -->
                    <div class="titulonosotros">
                    <p class="titulonosotrostxt">Prácticas Profesionales </p>
                    </div>
                    <!-- Contenido del carrusel -->
                    <div class="contenidonosotros">
                    <p class="contenidonosotrostxt">Ofrece a los estudiantes la oportunidad de aplicar los conocimientos adquiridos en el aula en un entorno laboral real. Durante su participación, los practicantes colaboran en proyectos de usabilidad y diseño de experiencia de usuario, desarrollando habilidades técnicas y analíticas clave.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Termina carrusel Practicas profesionales -->

    <div class="separador3"></div>
    <!-- Seccion Requisitos -->
    <div class="requisitosp">'
        <div class="requisitosptitle">Requisitos</div>
    </div>
    <div class="separador2"></div>
    <div class="lineadiv">
        <div class="linea3"></div>
    </div>
    <div class="separador2"></div>

    <!-- Carrusel Servicio Social -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="servicio">
            <div class="carousel-item active">
                <!-- Imagenes del carrusel -->
                <img class="d-block w-100 img1" src="{{ asset('photos/slide7.jpeg') }}"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Titulo del carrusel -->
                    <div class="titulonosotros">
                    <p class="titulonosotrostxt">Servicio Social </p>
                    </div>
                    <!-- Contenido del carrusel -->
                    <div class="contenidonosotros">
                    <p class="contenidonosotrostxt">UsaLab ofrece a los estudiantes la oportunidad de contribuir activamente en proyectos que impactan directamente en la comunidad y en el ámbito de la usabilidad y el diseño web. Este programa está diseñado para integrar a los estudiantes en el desarrollo y mejora de interfaces y experiencias digitales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Termina carrusel Servicio Social -->
    
    <div class="separador3"></div>
    <!-- Seccion requisitos Servicio Social -->
    <div class="requisitoss">
        <div class="requisitosstitle">Requisitos</div>
        <div class="requisitosscont">
            <div class="requisitossCard">
                <img class="requisitossimg" src="{{ asset('photos/requisitosSS1.png') }}" alt="">
                <div class="requisitosstitulo">Estar inscrito en una carrera relacionada</div>
                <div class="requisitossp">Capacidad para colaborar en proyectos multidisciplinarios junto a diseñadores, programadores y expertos en usabilidad.</div>
            </div>
        </div>
    </div>
    

@endsection