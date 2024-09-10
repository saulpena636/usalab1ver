@extends('layouts.main')

@section('cssp')
<link href="{{ asset('css/services.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('title','Nuestros servicios')

@section('content')
    <div class="services-container">
        <div class="nuestros-servicios-container">
            <div class="nuestros-servicios-title">Nuestros Servicios</div>
            <div class="nuestros-servicios-content">
                <div class="nuestros-servicios-text">En UsaLab, el Laboratorio de Usabilidad de la UTM, promovemos la usabilidad y la interacción humano-computadora (HCI). Apoyamos a la academia e industria con servicios que mejoran la experiencia del usuario y el diseño de interfaces, satisfaciendo las necesidades de estudiantes, investigadores y empresas.</div>
            </div>
        </div>

        <div class="formacion-container">
            <div class="formacion-title">Formación</div>
            <div class="formacion-cards-container">
                <div id="estudios-card" class="service-card">
                    <div class="service-card-figure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="556" height="355" viewBox="0 0 556 355" fill="none">
                            <g filter="url(#filter0_d_863_194)">
                                <path d="M556 119.193C556 291.734 207.432 315.613 18.7411 345.875C8.93331 347.448 0 339.909 0 329.976V16C0 7.16344 7.16344 0 16 0H536C544.837 0 556 7.16324 556 15.9998V119.193Z" fill="currentColor" fill-opacity="0.95" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_863_194" x="-4" y="0" width="560" height="354.084" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_863_194"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_863_194" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div id="estudios-card-content">
                        <div class="title-service-card">Estudios de Usabilidad</div>
                        <div class="text-service-card">Realización de pruebas y evaluaciones de usabilidad para identificar áreas de mejora en productos y sistemas interactivos.</div>
                    </div>
                </div>
                <div id="consultoria-card" class="service-card">
                    <div class="service-card-figure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="556" height="355" viewBox="0 0 556 355" fill="none">
                            <g filter="url(#filter0_d_863_194)">
                                <path d="M556 119.193C556 291.734 207.432 315.613 18.7411 345.875C8.93331 347.448 0 339.909 0 329.976V16C0 7.16344 7.16344 0 16 0H536C544.837 0 556 7.16324 556 15.9998V119.193Z" fill="currentColor" fill-opacity="0.95" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_863_194" x="-4" y="0" width="560" height="354.084" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_863_194"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_863_194" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div id="consultoria-card-content">
                        <div class="title-service-card">Consultoría en UX/UI</div>
                        <div class="text-service-card">Asesoramiento a empresas y organizaciones para optimizar la experiencia del usuario y el diseño de interfaces.</div>
                    </div>
                </div>
                <div id="capacitacion-card" class="service-card">
                    <div class="service-card-figure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="556" height="355" viewBox="0 0 556 355" fill="none">
                            <g filter="url(#filter0_d_863_194)">
                                <path d="M556 119.193C556 291.734 207.432 315.613 18.7411 345.875C8.93331 347.448 0 339.909 0 329.976V16C0 7.16344 7.16344 0 16 0H536C544.837 0 556 7.16324 556 15.9998V119.193Z" fill="currentColor" fill-opacity="0.95" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_863_194" x="-4" y="0" width="560" height="354.084" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_863_194"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_863_194" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div id="capacitacion-card-content">
                        <div class="title-service-card">Capacitación y Formación</div>
                        <div class="text-service-card">Impartición de cursos, talleres y conferencias para estudiantes, profesionales e investigadores interesados en la usabilidad y HCI.</div>
                    </div>
                </div>
            </div>
            <div class="formacion-line">
                <svg xmlns="http://www.w3.org/2000/svg" width="1341" height="4" viewBox="0 0 1341 4" fill="none">
                <path d="M2 2H1339" stroke="#ECECEC" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>
        </div>

        <div class="desarrollo-comercial-container">
            <div class="desarrollo-comercial-title">Desarrollo comercial</div>
            <div class="desarrollo-comercial-text">En UsaLab, nos dedicamos no solo a la investigación y la educación en el ámbito de la usabilidad y la interacción humano-computadora (HCI), sino también a la aplicación práctica de nuestros conocimientos en el desarrollo comercial. Nuestro objetivo es proporcionar soluciones efectivas y basadas en evidencia a las empresas y organizaciones que buscan mejorar sus productos y servicios a través del diseño centrado en el usuario. A través de nuestras colaboraciones comerciales, ayudamos a las empresas a optimizar sus interfaces, mejorar la experiencia del usuario y, en última instancia, aumentar su competitividad en el mercado.</div>
        </div>

        <div class="investigacion-container">
            <div class="investigacion-title">Investigación y desarrollo</div>
            <div class="investigacion-cards-container">
                <div id="investigacion-card" class="service-card">
                    <div class="service-card-figure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="556" height="355" viewBox="0 0 556 355" fill="none">
                            <g filter="url(#filter0_d_863_194)">
                                <path d="M556 119.193C556 291.734 207.432 315.613 18.7411 345.875C8.93331 347.448 0 339.909 0 329.976V16C0 7.16344 7.16344 0 16 0H536C544.837 0 556 7.16324 556 15.9998V119.193Z" fill="currentColor" fill-opacity="0.95" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_863_194" x="-4" y="0" width="560" height="354.084" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_863_194"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_863_194" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div id="investigacion-card-content">
                        <div class="title-service-card">Investigación Académica y Aplicada</div>
                        <div class="text-service-card">Desarrollo de proyectos de investigación que contribuyen al avance del conocimiento en el campo de la usabilidad y la interacción humano-computadora.</div>
                    </div>
                </div>
                <div id="desarrollo-card" class="service-card">
                    <div class="service-card-figure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="556" height="355" viewBox="0 0 556 355" fill="none">
                            <g filter="url(#filter0_d_863_194)">
                                <path d="M556 119.193C556 291.734 207.432 315.613 18.7411 345.875C8.93331 347.448 0 339.909 0 329.976V16C0 7.16344 7.16344 0 16 0H536C544.837 0 556 7.16324 556 15.9998V119.193Z" fill="currentColor" fill-opacity="0.95" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_863_194" x="-4" y="0" width="560" height="354.084" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_863_194"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_863_194" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div id="desarrollo-card-content">
                        <div class="title-service-card">Desarrollo de Prototipos</div>
                        <div class="text-service-card">Trabajamos con empresas en el desarrollo y prueba de prototipos, utilizando metodologías ágiles para iterar rápidamente y mejorar los diseños antes de su lanzamiento.</div>
                    </div>
                </div>
                <div id="analisis-card" class="service-card">
                    <div class="service-card-figure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="556" height="355" viewBox="0 0 556 355" fill="none">
                            <g filter="url(#filter0_d_863_194)">
                                <path d="M556 119.193C556 291.734 207.432 315.613 18.7411 345.875C8.93331 347.448 0 339.909 0 329.976V16C0 7.16344 7.16344 0 16 0H536C544.837 0 556 7.16324 556 15.9998V119.193Z" fill="currentColor" fill-opacity="0.95" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_863_194" x="-4" y="0" width="560" height="354.084" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_863_194"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_863_194" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div id="analisis-card-content">
                        <div class="title-service-card">Análisis de experiencia de Usuario</div>
                        <div class="text-service-card">Examinamos cómo los usuarios perciben y utilizan tu producto, identificando obstáculos y oportunidades de mejora. Optimizar cada interacción, intuitiva y placentera para los usuarios.</div>
                    </div>
                </div>
                <div id="proyecto-card" class="service-card">
                    <div class="service-card-figure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="556" height="355" viewBox="0 0 556 355" fill="none">
                            <g filter="url(#filter0_d_863_194)">
                                <path d="M556 119.193C556 291.734 207.432 315.613 18.7411 345.875C8.93331 347.448 0 339.909 0 329.976V16C0 7.16344 7.16344 0 16 0H536C544.837 0 556 7.16324 556 15.9998V119.193Z" fill="currentColor" fill-opacity="0.95" shape-rendering="crispEdges"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_863_194" x="-4" y="0" width="560" height="354.084" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_863_194"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_863_194" result="shape"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div id="proyecto-card-content">
                        <div class="title-service-card">Proyectos a Medida</div>
                        <div class="text-service-card">Colaboramos en proyectos específicos a medida, adaptándonos a las necesidades únicas de cada cliente y proporcionando soluciones personalizadas.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="academia-container">
            <div class="academia-title">Academia</div>
            <div class="mas-informacion-button">Más Información</div>
        </div>

        <div class="hablanosContainer">
            <div class="hablanos">
                <div class="hablanos-title">Háblanos de tú proyecto</div>
                <div class="hablanos-text">Nos gustaría conocer tu proyecto. Háblanos un poco más para desarrollar un plan de investigación que se ajuste a tus necesidades.</div>
                <div class="hablanos-button">Hablemos</div>
            </div>
        </div>

    </div>
@endsection