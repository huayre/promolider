@extends('plantilla.index')
@section('contenido')
    <div class="bg-twitter">
        <p class="text-center  text-light display-4">PAQUETES DE RECONSUMOS</p>
    </div>
    <div class="my-3">
        <a href="{{route('reconsumo.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus-circle"></i>NUEVO RECONSUMO</a>
    </div>
    <div  class="row">
        @foreach($listaReconsumos as $reconsumo)
            <div class="col-sm-6 col-md-4 my-3 ">
                <div class="card  border-success bg-github h-100" style="border:solid 1px #0e9f6e">
                    <img src="{{$reconsumo->imagen}}" class="card-img-top" alt="..." height="200">
                    <div class="card-body">
                        <h3 class="card-title text-primary text-uppercase text-center">{{$reconsumo->nombre}}</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> Descripción : {{$reconsumo->descripcion}}</li>
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> Precio venta : $ {{$reconsumo->precio_venta}}</li>
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> IVA : {{$reconsumo->iva}} %</li>
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> Porcentaje Comisionable : {{$reconsumo->porcentaje_comisionable}} %</li>
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> Valor Comisionable : {{$reconsumo->valor_comisionable}}</li>
                        </ul>
                    </div>

                    <div class="card-body d-flex justify-content-center">
                        <a href="{{route('reconsumo.edit',$reconsumo->id)}}" class="card-link"> <i class="fa fa-edit text-warning mr-2"></i>Editar</a>
                        <a href="#" data-toggle="modal" data-target="#modal-delete-{{$reconsumo->id}}" class="card-link"> <i class="fa fa-trash-o text-danger mr-2"></i>Eliminar</a>
                    </div>
                </div>
            </div>

            @include('administracion::reconsumos.eliminar')

        @endforeach
    </div>
@endsection
@section('script')
    <script>
        $(document).ready( function (){
            $('.myTable').DataTable({
                responsive : true,
                autoWidth : false
            });
        });
    </script>

@endsection
