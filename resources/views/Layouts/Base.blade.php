<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ISIU Colombia</title>
  <link rel="shortcut icon"  href="css_Base/logos/logo1.png" >


  <!-- Font Awesome Icons -->
  <link href="css_Base/vendor/fontawesome-free/css/all.min.css rel= " rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  

  <!-- Plugin CSS -->
  <link href="css_Base/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css_Base/css/creative.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css_Formularios/css_Formularios.css">
  

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{Route('Welcome')}}"><img src="css_Base/logos/logo1.png"  height=70px  width=120px class="img img-responsive"  alt=""></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">

        @guest
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.uniquindio.edu.co/">UNIVERSIDAD DEL QUINDIO</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">CONTACTO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{Route('Documentos')}}">DOCUMENTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{Route('InicioSesion')}}">EVALUADORES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">NOSOTROS</a>
          </li>
        @else
          <li class="nav-item">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->nombreEvaluador }}<span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          @endguest
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="css_Base/vendor/jquery/jquery.min.js"></script>
  <script src="css_Base/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js_Formularios/FuncionesBioclimatico.js"></script>
  <script src="js_Formularios/FuncionesGeologia.js"></script>
  <script src="js_Formularios/FuncionesEcosistema.js"></script>
  <script src="js_Formularios/FuncionesConstruido.js"></script>
  <script src="js_Formularios/FuncionesInteraccion.js"></script>
  <script src="js_Formularios/FuncionesInstitucionales.js"></script>
  <script src="js_Formularios/ResultadoFormulario2.js"></script>
  <script src="js_Formularios/FuncionesFormIII.js"></script>

  <!-- Plugin JavaScript -->
  <script src="css_Base/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="css_Base/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


  <!-- Custom scripts for this template -->
  <script src="css_Base/js/creative.min.js"></script>

</body>

</html>
