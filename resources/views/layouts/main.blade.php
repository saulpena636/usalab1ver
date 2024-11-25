<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet">
  <!-- Seccion para colocar CSS espeficico -->
  @yield('cssp')
  <!-- Seccion para colocar el titulo de la pagina -->
  <title>@yield('title')</title>
</head>

<body>
  <div class="container1">
    <header>
      <!-- Header de la pagina(logos del UsaLab) -->
      <div class="header">
        <img src="{{ asset('img/Logo UTM Color 1.png') }}" alt="logoutm" class="logoutm" srcset="">
        <img src="{{ asset('img/logo Usalab 3-03 1.png') }}" alt="logousalab" class="logousalab" srcset="">
      </div>
      <!-- Barra de navegacion -->
      <div class="navbar1">
        <!-- Seccion Inicio -->
        <div class="inicio">
          <div class="iniciotxt">Inicio</div>
        </div>
        <!-- Termina seccion Inicio -->
        <div class="menu1">
          <!-- Seccion acerca de -->
          <div class="acercade">
            <div class="navbartxt">Acerca de</div>
            <!-- Contenido acerca de -->
            <div class="acercadeCont">
              <div class="adcontent">
                <div class="navbartxt">Mision y vision</div>
              </div>
              <div class="adcontent">
                <div class="navbartxt">Instalaciones</div>
              </div>
              <div class="adcontent">
                <div class="navbartxt">Equipo a cargo</div>
              </div>
              <div class="adcontent">
                <div class="navbartxt">Trayectoria</div>
              </div>
              <div class="adcontent">
                <div class="navbartxt">colaboracion</div>
              </div>
              <div class="adcontent">
                <div class="navbartxt">Logros</div>
              </div>
              <div class="adcontent">
                <div class="navbartxt">Testimonios</div>
              </div>
            </div>
          </div>
          <!-- Termina seccion Acerca de -->

          <!-- Seccion servicios -->
          <div class="servicios">
            <div class="navbartxt">Servicios</div>
            <!--  -->
            <div class="serviciosCont">
              <div class="srcontent">
                <!-- Seccion servicios-industria -->
                <div class="navbartxt">Industria</div>
                <div class="servicioindustriaCont">
                  <div class="sricontent">
                    <div class="navbartxt">Estudios de Usabilidad</div>
                  </div>
                  <div class="sricontent">
                    <div class="navbartxt">Consultoria de UX/UI</div>
                  </div>
                  <div class="sricontent">
                    <div class="navbartxt">Capacitacion y formacion</div>
                  </div>
                  <div class="sricontent">
                    <div class="navbartxt">Desarrollo de prototipos</div>
                  </div>
                  <div class="sricontent">
                    <div class="navbartxt">Analisis de UX/UI</div>
                  </div>
                  <div class="sricontent">
                    <div class="navbartxt">Proyectos a medida</div>
                  </div>
                </div>
              </div>
              <!-- Termina seccion servicios industria -->

              <!-- Seccion servicios-academia -->
              <div class="srcontent">
                <div class="navbartxt">Academia</div>
                <div class="servicioacademiaCont">
                  <!-- Contenido Servicios academia -->
                  <div class="sracontent">
                    <div class="navbartxt">Planes de estudio</div>
                  </div>
                  <div class="sracontent">
                    <div class="navbartxt">Cursos Especializados</div>
                  </div>
                  <div class="sracontent">
                    <div class="navbartxt">Asesorias</div>
                  </div>
                  <div class="sracontent">
                    <div class="navbartxt">Acceso a Laboratorio</div>
                  </div>
                </div>
              </div>
              <!-- Termina seccion servicios academica -->
            </div>
          </div>
          <!-- Termina seccion Servicos -->

          <!-- Seccion Investigaciones -->
          <div class="investigaciones">
            <div class="navbartxt">Investigaciones</div>
            <div class="investigacionesCont">
              <div class="incontent">
                <div class="navbartxt">Proyectos Actuales</div>
              </div>
              <div class="incontent">
                <div class="navbartxt">Publicaciones</div>
              </div>
              <div class="incontent">
                <div class="navbartxt">Líneas de investigación</div>
              </div>
              <div class="incontent">
                <div class="navbartxt">Mas destacados</div>
              </div>
            </div>
          </div>
          <!-- Termina seccion Investigaciones -->

          <!-- Seccion formacion academica -->
          <div class="formacion">
            <div class="navbartxt">Formacion Académica</div>
            <div class="formacionCont">
              <div class="facontent">
                <div class="navbartxt">Pruebas de Usabilidad</div>
              </div>
              <div class="facontent">
                <div class="navbartxt">Practicas Profesionales</div>
              </div>
              <div class="facontent">
                <div class="navbartxt">Servicio Social</div>
              </div>
              <div class="facontent">
                <div class="navbartxt">Tesis</div>
              </div>
              <div class="facontent">
                <div class="navbartxt">Maestría</div>
              </div>
            </div>
          </div>
          <!-- Termina seccion formacion academica -->

          <!-- Seccion Eventos -->
          <div class="eventos">
            <div class="navbartxt">Eventos</div>
            <div class="eventosCont">
              <div class="evcontent">
                <div class="navbartxt">Últimos Eventos</div>
              </div>
              <div class="evcontent">
                <div class="navbartxt">Conferencias</div>
              </div>
              <div class="evcontent">
                <div class="navbartxt">Talleres</div>
              </div>
              <div class="evcontent">
                <div class="navbartxt">Cursos</div>
              </div>
              <div class="evcontent">
                <div class="navbartxt">Concursos</div>
              </div>
            </div>
          </div>
          <!-- seccion de idiomas de la barra de navegacion -->
          <div class="idioma">
            <img src="{{ asset('icons/fontisto_world-o.svg') }}" alt="">
            <div class="idiomatxt">Eng</div>
          </div>
        </div>
      </div>
      <!-- Termina barra de navegación -->
      <div class="separador"></div>
    </header>
    <!-- Seccion principal -->
    <main>
      @yield('content')
    </main>
    <!-- pie de pagina de la pagina -->
    <footer>
      <div class="footerinformacion">
        <div class="logosfooter">
          <img class="utmfooter" src="{{ asset('img/Logo-UTM-1.png') }}" />
          <img class="usalabfooter" src="{{ asset('img/logo Usalab 3-03 1.png') }}" />
        </div>
        <div class="sf1"></div>
        <div class="footertxt">+52 953 532 0399<br /><br />Av. Doctor Modesto Seara Vázquez #1, Acatlima, 69000 Heroica
          Cdad. de Huajuapan de León, Oax. Mexico<br /><br /></div>
        <div class="sf2"></div>
        <div class="logoslink">
          <img class="facebook" src="{{ asset('icons/mdi_facebook.svg') }}" />
          <img class="link12" src="{{ asset('icons/ic_round-link.svg') }}" />
        </div>
      </div>
    <!-- Seccion menú rápido -->
      <div class="footermenu">
        <div class="menurapido">
          <p class="menurapidotxt">&lt;Menú rápido&gt;</p>
          <br>
          <br>
          <div class="footeroptions">
            <p class="optiontxt">Inicio</p>
            <p class="optiontxt">Acerca de</p>
            <p class="optiontxt">Industria</p>
            <p class="optiontxt">Acaddemia</p>
            <p class="optiontxt">Investigaciones</p>
            <p class="optiontxt">Formación Academica</p>
            <p class="optiontxt">Eventos</p>
          </div>
        </div>
      </div>
    <!-- Termina seccion menú rapido -->
    </footer>

  </div>
</body>

</html>