@extends('redbinaria::oficina.plantilla')
@section('contenido')
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="{{asset('oficina/imagenes/carrusel/banner1.jpg')}}" class="d-block w-100"  height="370">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="{{asset('oficina/imagenes/carrusel/banner2.jpg')}}" class="d-block w-100" height="370">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection
