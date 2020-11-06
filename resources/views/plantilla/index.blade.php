<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promolider</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('plantilla\vendors\mdi\css\materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla\vendors\simple-line-icons\css\simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla\vendors\flag-icon-css\css\flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla\vendors\css\vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('plantilla\vendors\font-awesome\css\font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plantilla\vendors\jquery-bar-rating\fontawesome-stars.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('plantilla\css\style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('plantilla\images\favicon.png')}}">
</head>
<body>
    <div class="container-scroller">
        @include('plantilla.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                 @include('plantilla.panel_diseño')
                 @include('plantilla.panel_opciones')
                 @include('plantilla.aside')
                <div class="content-wrapper">
                    @yield('contenido')
                    @include('plantilla.footer')
                </div>

            </div>
        </div>
    </div>



    <!-- plugins:js -->
    <script src="{{asset('plantilla\vendors\js\vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('plantilla\vendors\jquery-bar-rating\jquery.barrating.min.js')}}"></script>
    <script src="{{asset('plantilla\vendors\chart.js\Chart.min.js')}}"></script>
    <script src="{{asset('plantilla\vendors\raphael\raphael.min.js')}}"></script>
    <script src="{{asset('plantilla\vendors\morris.js\morris.min.js')}}"></script>
    <script src="{{asset('plantilla\vendors\jquery-sparkline\jquery.sparkline.min.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('plantilla\js\off-canvas.js')}}"></script>
    <script src="{{asset('plantilla\js\hoverable-collapse.js')}}"></script>
    <script src="{{asset('plantilla\js\misc.js')}}"></script>
    <script src="{{asset('plantilla\js\settings.js')}}"></script>
    <script src="{{asset('plantilla\js\todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('plantilla\js\dashboard.js')}}"></script>
    <!-- End custom js for this page-->
</body>
</html>