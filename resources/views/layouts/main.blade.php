<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet">
  @yield('cssp')
  <title>@yield('title')</title>
</head>

<body>
  <div class="container1">
    <header>
      <div class="header">
        <img src="{{ asset('img/Logo UTM Color 1.png') }}" alt="logoutm" class="logoutm" srcset="">
        <img src="{{ asset('img/logo Usalab 3-03 1.png') }}" alt="logousalab" class="logousalab" srcset="">
      </div>
      <div class="navbar1">
        <div class="inicio">
          <div class="iniciotxt">Inicio</div>
        </div>
        <div class="menu1">
          <div class="acercade">
            <div class="navbartxt">Acerca de</div>
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
          <div class="servicios">
            <div class="navbartxt">Servicios</div>
            <div class="serviciosCont">
              <div class="srcontent">
                <div class="navbartxt">Industria</div>
              </div>
              <div class="srcontent">
                <div class="navbartxt">Academia</div>
              </div>
            </div>
          </div>
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
          <div class="idioma">
            <img src="{{ asset('icons/fontisto_world-o.svg') }}" alt="">
            <div class="idiomatxt">Eng</div>
          </div>
        </div>
      </div>
      <div class="separador"></div>
    </header>
    <main>
    @yield('content')
    </main>

    <footer>
      <div class="footerinformacion">
        <div class="logosfooter">
        <img class="utmfooter" src="{{ asset('img/Logo-UTM-1.png') }}" />
        <img class="usalabfooter" src="{{ asset('img/logo Usalab 3-03 1.png') }}" />
        </div>
        <div class="sf1"></div>
        <div class="footertxt">+52 953 532 0399<br/><br/>Av. Doctor Modesto Seara Vázquez #1, Acatlima, 69000 Heroica Cdad. de Huajuapan de León, Oax. Mexico<br/><br/></div>
        <div class="sf2"></div>
        <div class="logoslink">
          <img class="facebook" src="{{ asset('icons/mdi_facebook.svg') }}" />
          <img class="link12" src="{{ asset('icons/ic_round-link.svg') }}" />
        </div>
      </div>

      <div class="footermenu">
      <div class="menurapido">
        <p class="menurapidotxt">&lt;Menú rápido&gt;</p>
        <br>
        <br>
        <div class="footeroptions">
          <p class="optiontxt">Inicio</p>
          <p class="optiontxt">Acerca de</p>
          <p class="optiontxt">Comercial</p>
          <p class="optiontxt">Academico</p>
          <p class="optiontxt">Eventos</p>
          </div>
      </div>
      </div>
    </footer>

  </div>
</body>

</html>