<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('plantilla\vendors\font-awesome\css\font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla\vendors\jquery-bar-rating\fontawesome-stars.css')}}">

    <style>
        .nav-item a:hover {
            background:#00bb33
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#353a40">
    <a href="{{route('oficina_inicio',['id_afiliado'=>$id_afiliado,'rama'=>$rama])}}">
        <img src="{{asset('imagenes/empresa/logo.png')}}" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold" href="{{route('oficina_inicio',['id_afiliado'=>$id_afiliado,'rama'=>$rama])}}">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold" href="{{route('oficina_cursos',['id_afiliado'=>$id_afiliado,'rama'=>$rama])}}">CURSOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold" href="{{route('oficina_registro',['id_afiliado'=>$id_afiliado,'rama'=>$rama])}}">REGISTRARME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold" target="_blank" href="https://promolider.org/universidad/index.php">UNIVERSIDAD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold" target="_blank" href="{{route('login')}}">INICIAR SESIÓN</a>
                </li>
            </ul>
          <ul class="navbar-nav ml-auto p-1 bg-light rounded">
                <li class="nav-item bg-warning p-1">
                   <small class="badge badge-primary"> <strong>Oficina de:</strong></small>
                    <p class="text-capitalize"><strong>{{$datosPatrocinante->nombre.' '.$datosPatrocinante->apellido}}</strong></p>

                </li>
                @if($datosPatrocinante->imagen)
                    <li class="nav-item">
                        <img src="{{asset('imagenes/empresa/logo.png')}}" height="70">
                    </li>
                @else
                    <li class="nav-item text-center p-1">
                        <i class="fa fa-user-circle-o text-primary fa-3x"></i>
                        @if($rama==1)
                            <br>
                            <small class="text-light bg-primary p-1"><strong>Rama Izquierda</strong></small>
                        @elseif($rama==2)
                            <br>
                            <small class="text-light bg-primary p-1"><strong>Rama Derecha</strong></small>
                        @endif
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
  @yield('contenido')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
