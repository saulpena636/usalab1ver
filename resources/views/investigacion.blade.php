@extends('layouts.main')

@section('cssp')
<link href="{{ asset('css/investigacion.css') }}" type="text/css" rel="stylesheet">
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

        <!-- Contenedor para la sección "Proyectos actuales" -->
        <div class="proyectos-actuales-container">
            <!-- Titulo "Proyectos actuales" -->
            <div class="proyectos-actuales-title">Proyectos actuales</div>

            <!-- Contenedor del proyecto "Mexihc 2024" -->
            <div id="left-project" class="project-container">
                <!-- Contenedor para la imagen -->
                <div id="left-image" class="image-container">
                    <!-- Imagen "Mexihc 2024" -->
                    <img src="{{ asset('photos/mexihc2024.png') }}" alt="MEXICH 2024">
                </div>
                <!-- Contenedor para el texto -->
                <div id="left-project-content" class="project-content">
                    <!-- Titulo del proyecto -->
                    <div class="project-title">Competencia de diseño para estudiantes</div>
                    <!-- Línea de separación entre el titulo y descripción -->
                    <div class="content-line"></div>
                    <!-- Descripción del proyecto -->
                    <div class="project-description">Proveer una oportunidad a los estudiantes de diferentes campos de Interacción humano computadora (Ciencias de la computación, interacción y diseño visual, psicología, ciencias sociales, etc.) a participar en una actividad practica y demostrar sus habilidades en la resolución de problemas, diseño interactivo y experiencia de usuario.</div>
                </div>
            </div>
            <!-- Contenedor del proyecto CHI 2025 -->
            <div id="right-project" class="project-container">
                <!-- Contenedor para la imagen -->
                <div id="right-image" class="image-container">
                    <!-- Imagen "CHI 2025" -->
                    <img src="{{ asset('photos/chi2025.png') }}" alt="CHI 2025">
                </div>
                <!-- Contenedor para el texto -->
                <div id="right-project-content" class="project-content">
                    <!-- Titulo del proyecto -->
                    <div class="project-title">Concurso de diseño para estudiantes</div>
                    <!-- Línea de separación entre el titulo y descripción -->
                    <div class="content-line"></div>
                    <!-- Descripción del proyecto -->
                    <div class="project-description">Brindar una oportunidad para que estudiantes de diversos orígenes (por ejemplo, ciencias de la computación, HCI, diseño industrial, diseño de productos, diseño visual, diseño de interacción, etc.) participen en CHI y demuestren sus habilidades de resolución de problemas y diseño en una competencia internacional con sus compañeros.</div>
                </div>
            </div>
        </div>

        <!-- Contenedor para la sección "Publicaciones" -->
        <div class="publicaciones-container">
            <!-- Titulo "Publicaciones" -->
            <div class="publicaciones-title">Publicaciones</div>
            <!-- Contenedor para el listado de publicaciones -->
            <div class="publicaciones-list">

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-1.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Sólo por hoy Muévete Aliméntate y Cuídate: Aplicación SMS para motivación física y de orientación nutricional que combate el sedentarismo en oficinas - </div>
                        <!-- Subtitulo de la publicación -->
                        <div class="publication-card-subtitle">Student Design Competition, Congreso Mexicano de Interacción Humano Computadora (MexIHC) 2012, SMAC</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Wendy Yaneth García Martínez<br>
                            Eduardo Nila Cortez
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-2.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Developing a Contextual Network for Indigenous Communities in Mexico - Julio 2013</div>
                        <!-- Autores de la publicación -->
                         <div class="publication-card-authors">
                            Mario Alberto Moreno Rocha<br>
                            Carlos A. Martínez Sandoval<br>
                            Cuauhtémoc Rivera Loaiza<br>
                            Ma. Margarita Virgen Gonzales
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-3.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Designing for sustainable development in a remote Mexican community - Octubre 2014</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Mario Alberto Moreno Rocha<br>
                            Carlos A. Martínez Sandoval
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-4.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Análisis del Nuevo Recibo de la Comisión Federal de Electricidad CFE - Noviembre 2014</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                        Carlos A. Martínez Sandoval<br>
                        Mario Alberto Moreno Rocha 
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-5.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Developing a Usability Study for Mexican Government Sites - Noviembre 2014</div>
                        <!-- Autores de la publicación -->
                         <div class="publication-card-authors">
                            Mario Alberto Moreno Rocha<br>
                            Carlos A. Martínez Sandoval<br>
                            J, Salvador Aguilar Bautista<br>
                            Heriberto Lopez Ramírez
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-6.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Student Design Competition, Congreso Mexicano de Interacción Humano Computadora (MexIHC) 2014 - Sistema de Apoyo para el Empoderamiento de Victimas de Bullying: Héroes</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Víctor Manuel García Luna<br>
                            Heriberto Lopez<br>
                            Lourdes Liliana Martínez Avedaño
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-7.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Student Design Competition, Latin American Conference on Human Computer Interaction (CLIHC) 2015 - ESTELA: System of Humanitarian Aid to Migrants in Transit.</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Cuauhtli Campos<br>
                            Alejandro Gonzales Jiménez<br>
                            Anabel Herrera Soriano
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-8.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Breaking the UCD Process: The Case Study of a Failed Mexican Government Project - Mayo 2016</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Mario Alberto Moreno Rocha<br>
                            Carlos A. Martínez Sandoval<br>
                            Abril I. Rodriguez<br>
                            J. Andrés De la Cruz Pineda
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-9.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Desarrollando el Talento: la Educación de un Niño Prodigio en el área de HCI - Septiembre 2016</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Mario Alberto Moreno Rocha
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-10.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Heuristic Approach to Evaluate Basic Types of Interactions-Communications in MOOCs - Septiembre 2016</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Sandra Jimenez<br>
                            Ricardo Mendoza Gonzales<br>
                            Huizilopztli Luna-Garcia<br>
                            Carlos A. Martínez Sandoval
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-11.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Student Design Competition, Latin American Conference on Human Computer Interaction (CLIHC) 2017 - YAMI: Auxiliary complement to enable visually impaired people to use mobile devices.</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Maria Isabel Hernández Rios<br>
                            Edgar Ivan Ramirez Diaz<br>
                            Salvador Sanchez Silva
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-12.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">SSE: Sistema de Seguimiento de Egresados of the Universidad Tecnológica de la Mixteca - Noviembre 2017</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Mario Alberto Moreno Rocha<br>
                            Marcos A. Cruz Cruz<br>
                            Mario David May Cuevas
                        </div>
                    </div>
                </div>
   
                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-13.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Compendium of Good Practices for Usability Studies with Visually Impaired children - Noviembre 2017</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Maria Isabel Hernández Rios<br>
                            Salvador Sanchez Silva<br>
                            Edgar Iván Ramirez Diaz
                        </div>
                    </div>
                </div>
                    
                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-14.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Diseño de Interfaces con Tecnología Táctil Para Adultos Mayores - Octubre 2018</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Aldo Hernández Miguel<br>
                            Marcos Aurelio Álvarez Pérez<br>
                            Neydi Lopez
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-15.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Good Usability Practices for Development of Systems of the Technological University of the Mixteca - Octubre 2018</div>
                        <!-- Autores de la publicación --> 
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Irving Adrián Mondragón Ramirez<br>
                            Liz Velia Martínez Robles
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-16.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Including Students in Technological Development: Production and Marketing of Academic Projects -- Student Design Competition - Octubre 2018</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Natalia Trujillo Monterrosa<br>
                            Salvador Sanchez Silva<br>
                            Edgar Iván Ramirez Diaz
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-17.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">How to Carry Out Usability Studies with Visually Impaired Children - April 2019</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Salvador Alejandro Sanchez Silva<br>
                            Natalia Trujillo Monterrosa
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-18.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">YAKUIN: personal content verifier in digital messaging - Septiembre 2019</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Ana Laura Pacheco<br>
                            Deysy Vania Garcia Brena<br>
                            Natalia Trujillo Monterrosa
                        </div>
                    </div>
                </div>
     
                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-19.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Proposal for the formalization of the usability laboratory processes through a service life cycle - Diciembre 2021</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Everth Rocha
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-20.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">PDC Place Mexico: Tracing cacao in America - Agosto 2022</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Carlos A. Martínez Sandoval<br>
                            Mercedes Martínez Gonzales<br>
                            Chantal Garduño Israde<br>
                            Mario Alberto Moreno Rocha
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de publicación -->
                <div class="publication-card">
                    <!-- Contenedor de la imagen de la publicación -->
                    <div class="image-publication-card">
                        <!-- Imagen de la publicación -->
                        <img src="{{ asset('photos/publication-21.png') }}" alt="Imagen de publicación">
                    </div>
                    <!-- Separador entre la imagen y el contenido -->
                    <div class="vertical-line"></div>
                    <!-- Contenido de la tarjeta -->
                    <div class="publication-card-content">
                        <!-- Titulo de la publicación -->
                        <div class="publication-card-title">Una aplicación interactiva de simulación 3D para fomentar la cultura Mixteca en el museo regional de Huajuapam (MUREH) - Septiembre 2022</div>
                        <!-- Autores de la publicación -->
                        <div class="publication-card-authors">
                            Erik Ramos<br>
                            Moisés Ramirez<br>
                            Miguel Sanchez Cervantes<br>
                            Carlos Alberto Fernandez-y-Fernandez
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Contenedor para la sección "Líneas de Investigación" -->
        <div class="lineas-de-investigacion-container">
            <!-- Titulo "Líneas de Investigación" -->
            <div class="lineas-de-investigacion-title">Líneas de Investigación</div>
            <!-- Contenedor para el listado de líneas de investigación -->
            <div class="lineas-de-investigacion-list">

                <!-- Tarejeta de la línea de investigación -->
                <div class="line-of-research-card">
                    <!-- Titulo de la línea de investigación -->
                    <div class="line-of-research-card-title">Interacción Humano-Computadora (HCI)</div>
                    <!-- Separador entre el titulo y la descripción -->
                    <div class="card-line"></div>
                    <!-- Descripción de la línea de investigación -->
                    <div class="line-of-research-card-description">Brindar una oportunidad para que estudiantes de diversos orígenes (por ejemplo, ciencias de la computación, HCI, diseño industrial, diseño de productos, diseño visual, diseño de interacción, etc.) participen en CHI y demuestren sus habilidades de resolución de problemas y diseño en una competencia internacional con sus compañeros.</div>
                </div>

                <!-- Tarejeta de la línea de investigación -->
                <div class="line-of-research-card">
                    <!-- Titulo de la línea de investigación -->
                    <div class="line-of-research-card-title">Usabilidad en Dispositivos Móviles</div>
                    <!-- Separador entre el titulo y la descripción -->
                    <div class="card-line"></div>
                    <!-- Descripción de la línea de investigación -->
                    <div class="line-of-research-card-description">Se enfoca en estudiar y mejorar la usabilidad de aplicaciones y sistemas en dispositivos móviles, asegurando que sean accesibles y fáciles de usar en diversas plataformas y para diferentes tipos de usuarios.</div>
                </div>

                <!-- Tarejeta de la línea de investigación -->
                <div class="line-of-research-card">
                    <!-- Titulo de la línea de investigación -->
                    <div class="line-of-research-card-title">Accesibilidad Digital</div>
                    <!-- Separador entre el titulo y la descripción -->
                    <div class="card-line"></div>
                    <!-- Descripción de la línea de investigación -->
                    <div class="line-of-research-card-description">Investiga cómo hacer que los sistemas y plataformas digitales sean accesibles para personas con discapacidades, proponiendo soluciones de diseño inclusivo que eliminen barreras de uso.</div>
                </div>

                <!-- Tarejeta de la línea de investigación -->
                <div class="line-of-research-card">
                    <!-- Titulo de la línea de investigación -->
                    <div class="line-of-research-card-title">Evaluación de Usabilidad en Entornos Virtuales</div>
                    <!-- Separador entre el titulo y la descripción -->
                    <div class="card-line"></div>
                    <!-- Descripción de la línea de investigación -->
                    <div class="line-of-research-card-description">Esta línea investiga la efectividad de las interfaces en entornos de realidad virtual y aumentada, con el objetivo de mejorar la experiencia del usuario en estas tecnologías emergentes.</div>
                </div>

                <!-- Tarejeta de la línea de investigación -->
                <div class="line-of-research-card">
                    <!-- Titulo de la línea de investigación -->
                    <div class="line-of-research-card-title">Diseño de Interfaces Multiculturales</div>
                    <!-- Separador entre el titulo y la descripción -->
                    <div class="card-line"></div>
                    <!-- Descripción de la línea de investigación -->
                    <div class="line-of-research-card-description">Explora cómo adaptar interfaces digitales para ser efectivas en diferentes contextos culturales, asegurando que sean comprensibles y atractivas para usuarios de diversas regiones y trasfondos.</div>
                </div>

                <!-- Tarejeta de la línea de investigación -->
                <div class="line-of-research-card">
                    <!-- Titulo de la línea de investigación -->
                    <div class="line-of-research-card-title">Usabilidad en el Ámbito Educativo</div>
                    <!-- Separador entre el titulo y la descripción -->
                    <div class="card-line"></div>
                    <!-- Descripción de la línea de investigación -->
                    <div class="line-of-research-card-description">Se centra en mejorar la usabilidad de plataformas de e-learning y otros recursos educativos digitales, facilitando el aprendizaje y la enseñanza a través de interfaces bien diseñadas.</div>
                </div>

                <!-- Tarejeta de la línea de investigación -->
                <div class="line-of-research-card">
                    <!-- Titulo de la línea de investigación -->
                    <div class="line-of-research-card-title">Métodos de Pruebas de Usabilidad</div>
                    <!-- Separador entre el titulo y la descripción -->
                    <div class="card-line"></div>
                    <!-- Descripción de la línea de investigación -->
                    <div class="line-of-research-card-description">Desarrolla y perfecciona técnicas y herramientas para evaluar la usabilidad de sistemas interactivos, garantizando que cumplan con los estándares de calidad y satisfacción del usuario.</div>
                </div>

            </div>
        </div>

        <!-- Contenedor para la sección "Investigaciones más destacadas" -->
        <div class="investigaciones-mas-destacadas-container">
            <!-- Titulo de "Investigaciones más destacadas" -->
            <div class="investigaciones-mas-destacadas-title">Investigaciones más destacadas</div>
            
            <!-- Contenedor de la primer investigación -->
            <div id="investigacion-1" class="research-container">
                <div id="investigacion-destacada-1" class="investigacion-destacada-title">Investigación en Accesibilidad Web</div>
            </div>

            <!-- Contenedor de la segunda investigación -->
            <div id="investigacion-2" class="research-container">
                <div id="investigacion-destacada-2" class="investigacion-destacada-title">Estudio de la Usabilidad en Software Educativo</div>
            </div>
        </div>

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection