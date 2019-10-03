@extends('Layouts.Base')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesión</title>
    <link rel="shortcut icon"  href="css_Base/logos/logo1.png" >

    <!-- Font Icon -->
    <link rel="stylesheet" href="css_Login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css_Login/css/style.css">
</head>
<body>
    
    <div class="container">  
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="signup-content">
                <form class="signup-form" action="{{ route('login') }}" method="POST">

                    {{ csrf_field() }}  

                    @if(Session::has('error_message'))
                        <div class="alert alert-danger">
                            <ul>
                                {{ Session::get('error_message') }}
                            </ul>
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h2 class="form-title">Inicio Sesión</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" value="{{ old('email') }}" name="email" id="email" placeholder="correo"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" placeholder="Contraseña"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Iniciar Sesión"/>
                    </div>
                </form>
            </div>
    </div>


    <!-- JS -->
    <script src="css_Login/vendor/jquery/jquery.min.js"></script>
    <script src="css_Login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

@endSection