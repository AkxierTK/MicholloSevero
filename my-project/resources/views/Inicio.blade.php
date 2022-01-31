
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('style/style.css')}}">
  <title>Chollo Severo</title>
</head>

<body class="inicio">
  <header>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="{{route('chollos.cargar')}}" class="navbar-brand">
          <img src="{{asset('media/logoChollo.png')}}" width="50" height="50" alt="CHOLLO" class="d-inline-block align-middle mr-2">
          <span class="text-uppercase font-weight-bold">Chollo Severo</span>
        </a>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-2"><a href="{{route('chollos.cargar')}}" class="nav-link inicioB">Inicio<span class="sr-only">(current)</span></a></li>
            <li class="nav-item active mr-2"><a href="#" class="nav-link registrar"><img src="{{asset('media/stickman.png')}}" width="24" height="24" alt="CHOLLO" class="d-inline-block align-middle">Iniciar Sesión/Regístrate</a></li>
            <li class="nav-item active"><a href="{{ route('destacados') }}" class="nav-link comparte">Destacados</a></li>
            <li class="nav-item active"><a href="{{ route('nuevos') }}" class="nav-link comparte">Nuevos</a></li>
            <li class="nav-item active"><a href="{{ route('crear') }}" class="nav-link comparte">+ Comparte</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  @yield('apartado')
  <footer>
  <div style="background-color:rgb(24, 22, 22);width:100%;text-align:center; height:50px;color:white;top:95%;position:relative;">
    <p>CHOLLO SEVERO &copy;CopyRight {{date("Y")}}</p>
</div>
  </footer>
</body>

</html>