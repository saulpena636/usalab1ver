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
    <div class="separador2"></div>
    <div class="colaboracionesContent">
        <div class="colaboracionestitle">Colaboraciones</div>
    </div>
    <div class="separador2"></div>
    <div class="logrosContent">
        <div class="logrostitle">Logros en participacion de concurso</div>
        <div class="separador5"></div>
        <div class="logroscont">
            <div class="cuadroverde">
                <div class="cuadrotitle">ACM SIGCHI 2007</div>
                <div class="cuadrop">Segundo Lugar San josé, California</div>
            </div>
            <div class="cuadroverde">
                <div class="cuadrotitle">ACM SIGCHI 2008</div>
                <div class="cuadrop">Primer Lugar, Florencia Italia</div>
            </div>
            <div class="cuadroazul">
                <div class="cuadrotitle">MexIHC 2010</div>
                <div class="cuadrop">Primer Lugar, San Luis Potosí</div>
            </div>
            <img class="cuadroutm" src="{{ asset('img/Logo UTM Color 1.png')}}" alt="" srcset="">

            <div class="cuadrogris">
                <div class="cuadrotitle">iSDC UPA 2011</div>
                <div class="cuadrop">Primer Lugar, Atlante, Georgia</div>
            </div>
            <div class="cuadroverde">
                <div class="cuadrotitle">ACM SIGCHI 2011</div>
                <div class="cuadrop">Finalistas, Vancouver, Canadá</div>
            </div>
            <div class="cuadroceleste">
                <div class="cuadrotitle">CLIHC 2011</div>
                <div class="cuadrop">Primer y Sgundo Lugar, Porto do Galinhas, Brasil</div>
            </div>
            <div class="cuadroazul">
                <div class="cuadrotitle">MexIHC 2012</div>
                <div class="cuadrop">Primer y Tercer Lugar, ITAM Mexico</div>
            </div>

            <div class="cuadroverde">
                <div class="cuadrotitle">ACM SIGHI 2013</div>
                <div class="cuadrop">Segundo Lugar, Finalistas, Paris, Francia</div>
            </div>
            <div class="cuadroceleste">
                <div class="cuadrotitle">CLIHC 2013</div>
                <div class="cuadrop">Primer lugar y Tercer Lugar, ITAM Mexico</div>
            </div>
            <div class="cuadroazul">
                <div class="cuadrotitle">MexIHC 2014 ENC 2014</div>
                <div class="cuadrop">Primer y Tercer Lugar, Nova Universitas, Oaxaca</div>
            </div>
            <div class="cuadroceleste">
                <div class="cuadrotitle">CLIHC 2015</div>
                <div class="cuadrop">Primer, Segundo y Cuarto Lugar, Cordoba, Argentina</div>
            </div>

            <div class="cuadroazul">
                <div class="cuadrotitle">MexIHC 2016</div>
                <div class="cuadrop">Tercer y Cuarto lugar, Colima, Colima</div>
            </div>
            <div class="cuadroverde">
                <div class="cuadrotitle">ACM SIGCHI 2017</div>
                <div class="cuadrop">Finalistas, Denver Colorado</div>
            </div>
            <div class="cuadroceleste">
                <div class="cuadrotitle">CLIHC 2017</div>
                <div class="cuadrop">Primer y segundo lugar, Antigua Guatemala</div>
            </div>
            <div class="cuadroazul">
                <div class="cuadrotitle">MexIHC 2018</div>
                <div class="cuadrop">Segundo y Tercer Lugar, Mérida Yucatan</div>
            </div>

            <img class="cuadrousalab" src="{{ asset('img/logo Usalab 3-03 1.png') }}" alt="" srcset="">
            <div class="cuadroceleste">
                <div class="cuadrotitle">CLIHC 2019</div>
                <div class="cuadrop">Segundo Lugar, Panama</div>
            </div>
            <div class="cuadroverde">
                <div class="cuadrotitle">ACM SIGCHI 2023</div>
                <div class="cuadrop">Segundo Lugar, Hamburgo, Alemania</div>
            </div>
            <div class="cuadroceleste">
                <div class="cuadrotitle">CLIHC 2023</div>
                <div class="cuadrop">Primer lugar, Puebla, México</div>
            </div>
        </div>
    </div>

    <div class="separador2"></div>
    <div class="testimoniosContent">
        <div class="testimoniostitle">Algunos Testimonios</div>
        <div class="testimonioscont">
            <div class="testimoniocard">
                <img class="testimoniosimg" src="{{ asset('photos/testimonio1.png') }}" alt="" srcset="">
                <div class="testimoniotitulo">Ana Martínez, Directora de Producto, Tech Innovations</div>
                <div class="testimoniop">"El equipo de UsaLab transformó nuestra interfaz de usuario, mejorando significativamente la experiencia del cliente. Las recomendaciones prácticas y el análisis detallado nos ayudaron a identificar puntos críticos y a implementar mejoras efectivas."</div>
            </div>

            <div class="testimoniocard">
                <img class="testimoniosimg" src="{{ asset('photos/testimonio2.png') }}" alt="" srcset="">
                <div class="testimoniotitulo">Laura Sánchez, Gerente de Proyectos, WebDesign Co.</div>
                <div class="testimoniop">"Gracias a UsaLab, logramos optimizar nuestro sitio web y aumentar la satisfacción del usuario. Su enfoque profesional y su meticulosa atención al detalle marcaron una gran diferencia en nuestro proyecto."</div>
            </div>

            <div class="testimoniocard">
                <img class="testimoniosimg" src="{{ asset('photos/testimonio3.png') }}" alt="" srcset="">
                <div class="testimoniotitulo">Miguel Fernández, Fundador, StartupX</div>
                <div class="testimoniop">"El análisis de usabilidad realizado por UsaLab fue crucial para el lanzamiento exitoso de nuestra aplicación. Su comprensión de las necesidades del usuario y las soluciones propuestas fueron clave para nuestro éxito."</div>
            </div>
            <div class="testimoniocard">
                <img class="testimoniosimg" src="{{ asset('photos/testimonio4.png') }}" alt="" srcset="">
                <div class="testimoniotitulo">Carlos López, Jefe de Desarrollo, Soft Solutions</div>
                <div class="testimoniop">"Trabajar con UsaLab fue una experiencia increíble. No solo recibimos un informe detallado de usabilidad, sino que también nos brindaron sesiones de asesoramiento para entender mejor a nuestros usuarios. ¡Altamente recomendados!"</div>
            </div>
            <div class="testimoniocard">
                <img class="testimoniosimg" src="{{ asset('photos/testimonio5.png') }}" alt="" srcset="">
                <div class="testimoniotitulo">María González, CEO, Innovatech</div>
                <div class="testimoniop">"El equipo de UsaLab nos ayudó a transformar nuestro sitio web, haciendo que la navegación y la interacción sean mucho más fluidas para nuestros usuarios. Su experiencia en usabilidad es evidente y los resultados hablan por sí mismos."</div>
            </div>
        </div>
    </div>

    <div class="separador2"></div>
    <div class="hablanosContainer">
        <div class="hablanos">
            <div class="hablanos-title">Háblanos de tú proyecto</div>
            <div class="hablanos-text">Nos gustaría conocer tu proyecto. Háblanos un poco más para desarrollar un plan de
            investigación que se ajuste a tus necesidades.</div>
            <div class="hablanos-button">Hablemos</div>
        </div>
    </div>
    <div class="separador2"></div>

@endsection