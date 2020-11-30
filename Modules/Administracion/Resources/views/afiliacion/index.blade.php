@extends('plantilla.index')
@section('contenido')
    <div class="bg-twitter">
        <p class="text-center text-light display-4">LISTADO DE PAQUETES DE AFILIACIÓN</p>
    </div>
    <div class="my-3">
        <a href="{{route('afiliacion.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus-circle"></i>NUEVO AFILIACIÓN</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover myTable">
            <thead class="table-success ">
                <tr>
                    <td>Item</td>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Comisionable</th>
                    <th>Iva</th>
                    <th>Descuento Compra</th>
                    <th>Porcentaje Corte Binario</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach($listaAfiliacion as $afiliacion)
                  <tr>
                      <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                      <td>{{$afiliacion->nombre}}</td>
                      <td>${{$afiliacion->precio}}</td>
                      <td>{{$afiliacion->comisionable}}%</td>
                      <td>{{$afiliacion->iva}}%</td>
                      <td>{{$afiliacion->descuento_compra}}%</td>
                      <td>{{$afiliacion->porcentaje_corte_binario}}%</td>
                      <td>
                          <div  class="d-flex justify-content-center">
                              <a href="{{route('afiliacion.edit',$afiliacion->id)}}">
                                  <i class="fa fa-edit text-dark mr-3"></i></a>

                              <a href="#" data-toggle="modal" data-target="#modal-delete-{{$afiliacion->id}}">
                                  <i class="fa fa-trash-o text-danger"></i>
                              </a>
                              @include('administracion::afiliacion.modal_eliminar')
                          </div>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
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
