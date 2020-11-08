<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('plantilla\vendors\font-awesome\css\font-awesome.min.css')}}">
    <title>Document</title>
</head>
<style>
    #particles-js{
        background-image:url("{{asset('imagenes/autenticacion/fondo_login.jpg')}}");
        background-size:cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-color: #000b16;
        position: fixed;
        height: 100vh;
        width: 100%;
        z-index: -1;
    }
    #contenidos{
        position:relative;
        z-index: 99;
    }
</style>
<body>
<div id="particles-js">

</div>
<div class="container" id="contenidos" >
    <div class="row justify-content-center" style="padding-top: 120px">
        <div class="card col-10 col-sm-10 col-md-6 col-lg-4 shadow " style="background-color: #090909">
            <div class="card-body px-0 ">
                <div class="row">
                    <img class="mx-auto mb-2" src="{{asset('imagenes/empresa/logo.png')}} "width="260" height="70">
                </div>
                <h4 class="text-center text-light" >Iniciar Sesión</h4>
                <form method="POST" action="{{route('iniciosesion')}}">
                    @csrf
                    <div class="form-group mt-4 mt-3">
                        @if(session()->has('error_credenciales'))
                            <p class="text-danger text-center mt-1 font-weight-bold">{{ session()->get('error_credenciales') }}</p>
                        @endif
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                            </div>
                            <input  type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required  autofocus placeholder="Usuario">
                        </div>

                        @error('usuario')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group mt-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input  type="password" class="form-control @error('contraseña') is-invalid @enderror" name="contraseña" required autocomplete="current-password" placeholder="Contraseña">

                            @error('contraseña')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{--<div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>--}}

                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-block ">
                            {{ __('INGRESAR') }}
                        </button>

                        {{--  @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                          --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{'paquetes/particles.js/particles.js'}}"></script>
<script src="{{'paquetes/particles.js/app.js'}}"></script>
</body>
</html>
