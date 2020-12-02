@extends('plantilla.index')
@section('contenido')
    <div class="bg-twitter">
        <p class="text-center text-light display-4">LISTADO DE PAQUETES DE AFILIACIÓN</p>
    </div>
    <div class="my-3">
        <a href="{{route('paquete1.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus-circle"></i>NUEVO PAQUETE</a>
    </div>
    <div >
        <table class="table table-hover myTable">
            <thead class="table-warning">
                <tr>
                    <td>Item</td>
                    <th>Paquete</th>
                    <th>Precio</th>
                    <th>IVA</th>
                    <th>Descuento Compras</th>
                    <th>Corte Binario</th>
                    <th>Bono Efectivo Rápido</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach($listaPaquetes as $paquete)
                  <tr>
                      <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                      <td>{{$paquete->nombre}}</td>
                      <td>${{$paquete->precio_venta}}</td>
                      <td>{{$paquete->iva}}%</td>
                      <td>{{$paquete->descuento_compras}}%</td>
                      <td>{{$paquete->porcentaje_corte_binario}}%</td>
                      <td>{{$paquete->bono_efectivo_rapido}}%</td>
                      <td>
                          <div  class="d-flex justify-content-center">
                              <a href="{{route('paquete1.edit',$paquete->id)}}">
                                  <i class="fa fa-edit text-dark mr-2"></i></a>

                              <a href="#" data-toggle="modal" data-target="#modal-delete-{{$paquete->id}}">
                                  <i class="fa fa-trash-o text-danger mr-2"></i>
                              </a>
                              @include('administracion::paquete1.modal_eliminar')

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
