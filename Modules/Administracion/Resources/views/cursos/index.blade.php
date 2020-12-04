@extends('plantilla.index')
@section('contenido')
    <div class="bg-twitter">
        <p class="text-center  text-light display-4">PAQUETES DE PRODUCTOS</p>
    </div>
    <div class="my-3">
        <a href="{{route('curso.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus-circle"></i>NUEVO PRODUCTO</a>
    </div>
    <div  class="row">
      {{--  @foreach($listaPaquetes as $paquete)
            <div class="col-sm-6 col-md-4 my-3 ">
                <div class="card  border-success" style="border:solid 1px #0e9f6e">
                    <img src="{{$paquete->imagen}}" class="card-img-top" alt="..." height="200">
                    <div class="card-body">
                        <h3 class="card-title text-primary text-uppercase text-center">{{$paquete->nombre}}</h3>
                        <h3 class="card-title text-primary text-uppercase text-center">$ {{$paquete->precio_venta}}</h3>
                        <ul class="list-group list-group-flush bg-dark">
                            <li class="list-group-item "><i class="fa fa-star text-warning" style="color: yellow"></i> IVA : {{$paquete->iva}}%</li>
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> Descuento en Compras : {{$paquete->descuento_compras}}%</li>
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> Corte Binario : {{$paquete->porcentaje_corte_binario}}%</li>
                            <li class="list-group-item "><i class="fa fa-star text-warning"></i> Bono Efectivo Rapido : {{$paquete->bono_efectivo_rapido}}%</li>
                        </ul>
                    </div>

                    <div class="card-body d-flex justify-content-center">
                        <a href="#" class="card-link"> <i class="fa fa-edit text-dark mr-2"></i>Editar</a>
                        <a href="#" data-toggle="modal" data-target="#modal-delete-{{$paquete->id}}" class="card-link"> <i class="fa fa-trash-o text-danger mr-2"></i>Eliminar</a>
                    </div>
                </div>
            </div>
            @include('administracion::paquetes.modal_eliminar')
        @endforeach
        --}}
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
