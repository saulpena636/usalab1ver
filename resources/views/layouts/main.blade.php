<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet">
  <title>Document</title>
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
            <div class="acercadetxt">Acerca de</div>
          </div>
          <div class="servicios">
            <div class="serviciostxt">Servicios</div>
            <div class="serviciosCont">
              <div class="drcontent">
                <div class="comercialtxt">Comercial</div>
              </div>
              <div class="drcontent">
                <div class="academicotxt">Academico</div>
              </div>
            </div>
          </div>
          <div class="eventos">
            <div class="eventostxt">Eventos</div>
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
      
    </footer>

  </div>
</body>

</html>