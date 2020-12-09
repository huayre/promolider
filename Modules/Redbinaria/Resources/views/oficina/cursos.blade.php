@extends('redbinaria::oficina.plantilla')
@section('contenido')
<div class="my-4">
    <div class="d-flex justify-content-center mt-2">
        {!! $listadoCursos->links() !!}
    </div>

    <div class="container ">
        <h4 class="text-center"> <i class="fa fa-graduation-cap text-success"></i> Diplomados <i class="fa fa-graduation-cap text-success"></i></h4>
        <div  class="row mt-4">
            @foreach($listadoCursos as $curso)
                <div class="col-md-3  mb-4">
                    <div class="card rounded bg-github h-100" style="background-color:#353a40">
                        <a href="{{route('detalle_curso',['id_afiliado'=>$id_afiliado,'rama'=>$rama,'id_curso'=>$curso->id])}}" style="text-decoration: none">
                            <img src="{{$curso->imagen}}" class="card-img-top" alt="..." height="230">
                            <div class="card-body">
                                <h4 class="card-title text-primary text-uppercase text-center">$ {{$curso->precio_venta+($curso->precio_venta*($curso->iva/100))}}</h4>
                                <h5 class="card-title text-primary text-uppercase text-center">{{$curso->nombre}}</h5>

                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center my-3">
        {!! $listadoCursos->links() !!}
    </div>
</div>
@endsection
