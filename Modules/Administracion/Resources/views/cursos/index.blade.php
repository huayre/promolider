@extends('plantilla.index')
@section('contenido')
    <div class="bg-twitter">
        <p class="text-center  text-light display-4">PAQUETES DE PRODUCTOS</p>
    </div>
    <div class="my-3">
        <a href="{{route('curso.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus-circle"></i>NUEVO PRODUCTO</a>
    </div>
    <div  class="row">
        @foreach($listadoCursos as $curso)
            <div class="col-sm-4 col-md-3 my-3 ">
                <div class="card rounded bg-github h-100">
                    <img src="{{$curso->imagen}}" class="card-img-top" alt="..." height="150">
                    <div class="card-body">
                        <h4 class="card-title text-light display-4 text-uppercase text-center">$ {{$curso->precio_venta}}</h4>
                        <h5 class="card-title text-primary text-uppercase text-center">{{$curso->nombre}}</h5>

                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <a href="#" data-toggle="modal" data-target="#modal-delete-{{$curso->id}}" class="card-link"> <i class="fa fa-eye text-light mr-2"></i></a>
                        <a href="{{route('curso.edit',$curso->id)}}" class="card-link"> <i class="fa fa-edit text-light mr-2"></i></a>
                        <a href="#" data-toggle="modal" data-target="#modal-delete-{{$curso->id}}" class="card-link"> <i class="fa fa-trash-o text-light mr-2"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

