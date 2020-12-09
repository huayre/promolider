@extends('redbinaria::oficina.plantilla')
@section('contenido')
 <div class="container my-4">
     <div class="row">
         <div class="col-lg-7 my-sm-5 my-4 my-lg-0 ">
             <div class="row mb-2">
                 <div class="col-12">
                     <h2 class="font-weight-bolder text-primary text-capitalize">{{$curso->nombre}}</h2>
                 </div>
             </div>
             <div class="row my-3">
                 <div class="col-12">
                     <h5>{{$curso->descripcion}}</h5>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <i class="fa fa-vcard" aria-hidden="true"></i>&nbsp;
                     Creado por <a class="mx-1 text-capitalize" href="#">{{$curso->autor->nombre.' '.$curso->autor->apellido}}</a>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12 col-md-auto">
                     <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                     Fecha de última actualización:<span class="mx-1">{{$curso->updated_at->format('d-m-Y')}}</span>
                 </div>
                 <div class="col-12 col-md-auto  text-capitalize">
                     <i class="fa fa-globe" aria-hidden="true"></i>
                    {{$curso->idioma}}
                 </div>
             </div>
             <div class="my-5">
                 <div class="card w-100">
                     <div class="card-body table-success">
                         <h4 class="card-title"><strong>Lo que aprenderás</strong></h4>
                         <div class="row">
                             @foreach($curso->capacidades as $capacidad)
                             <div class="col-12 col-sm-6 mb-1">
                                 <i class="fa fa-graduation-cap text-primary" aria-hidden="true"></i>
                                 {{$capacidad->contenido}}
                             </div>
                              <br>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-5 mx-auto">
             <div class="row justify-content-center">
                 <div class="col-sm-12 col-md-9">
                     <div class="shadow rounded bg-warning">
                         <img src="{{$curso->imagen}}" class="card-img-top">
                         <div class="card-body">
                             <h1 class="card-title font-weight-bold text-dark text-center display-4">$ {{$curso->precio_venta}}</h1>
                             <a href="{{route('oficina_registro',['id_afiliado'=>$id_afiliado,'rama'=>$rama])}}" class="btn btn-block  btn-success mb-5">
                                 COMPRAR AHORA
                             </a>
                             <strong>Este diplomado incluye:</strong><br>

                               <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                                 Acceso en dispositivos móviles
                             <br>
                                 <i class="fa fa-certificate" aria-hidden="true"></i>&nbsp;
                                 Certificado de finalización

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endsection
