@extends('plantilla.index')
@section('contenido')
  <div class="row">
     <div class="col-md-4">
         <h3>Oficina Rama Izquierda</h3>
         <p class="text-primary">{{$urlAfiliacionIzquierda}}</p>
         <a href="{{$urlAfiliacionIzquierda}}" target="_blank" class="btn btn-primary"><i class="fa fa-desktop"></i>Ver</a>
     </div>
      <div class="col-md-4 d-flex justify-content-center">
          <img src="http://localhost:8000/plantilla\images\faces\face10.jpeg" alt="image" class="rounded-circle">
      </div>
      <div class="col-md-4">
          <h3>Oficina Rama Derecha</h3>
         <p class="text-primary">{{$urlAfiliacionDerecha}}</p>
          <a href="{{$urlAfiliacionDerecha}}" target="_blank" class="btn btn-primary"><i class="fa fa-desktop"></i>Ver</a>
      </div>

  </div>
@endsection
