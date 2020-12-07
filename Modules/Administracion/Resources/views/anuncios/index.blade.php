@extends('plantilla.index')
@section('contenido')
    <div class="bg-twitter">
        <p class="text-center text-light display-4">LISTADO DE ANUNCIOS</p>
    </div>
    <div class="my-3">
        <a href="{{route('anuncio.create')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus-circle"></i>NUEVO ANUNCIO</a>
    </div>
    <div >
        <table class="table table-hover myTable">
            <thead class="table-success">
                <tr>
                    <td>Item</td>
                    <th>Mensaje</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
              @foreach($listaAnuncios as $anuncio)
                  <tr>
                      <td><small class="badge badge-primary badge-pill">{{$loop->index+1}}</small></td>
                      <td>{{$anuncio->mensaje}}</td>
                      @if($anuncio->estado)
                          <td><small class="badge badge-success">Activo</small></td>
                      @else
                          <td><small class="badge badge-danger">Desactivado</small></td>
                      @endif

                      <td>

                         <div  class="d-flex justify-content-center">
                              <a href="{{route('anuncio.edit',$anuncio->id)}}" data-toggle="tooltip" data-placement="top" title="Cambiar estado">
                                  <i class="fa fa-edit text-dark mr-2"></i></a>

                              <a href="#" data-toggle="modal" data-target="#modal-delete-{{$anuncio->id}}" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                  <i class="fa fa-trash-o text-danger mr-2"></i>
                              </a>


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
