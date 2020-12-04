@extends('plantilla.index')
@section('contenido')
    <div class="card">
        <div class="card-header bg-success p-2" >
            <p class="text-center text-light display-4">EDITAR PAQUETE DE AFILIACIÓN</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('paquete.update',$paquete->id)}}" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre <small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('nombre') is-invalid @enderror" name="nombre" value="{{$paquete->nombre}}">
                            @error('nombre')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Precio ($)<small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('precio_venta') is-invalid @enderror" name="precio_venta" value="{{$paquete->precio_venta}}">
                            @error('precio_venta')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>IVA (%)<small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('iva') is-invalid @enderror" name="iva" value="{{$paquete->iva}}">
                            @error('iva')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Descuento (%) <small class="text-muted">en la compra para los cursos</small> <small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('descuento_compras') is-invalid @enderror" name="descuento_compras" value="{{$paquete->descuento_compras}}">
                            @error('descuento_compras')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Corte Binario (%) <small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('porcentaje_corte_binario') is-invalid @enderror" name="porcentaje_corte_binario" value="{{$paquete->porcentaje_corte_binario}}">
                            @error('porcentaje_corte_binario')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bono Efectivo Rapido (%) <small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('bono_efectivo_rapido') is-invalid @enderror" name="bono_efectivo_rapido" value="{{$paquete->bono_efectivo_rapido}}">
                            @error('bono_efectivo_rapido')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Imagen <small class="text-google">requerido</small></label>
                            <label class="btn btn-light btn-file " style="cursor: pointer">
                                <i class="fa fa-cloud-upload text-primary"></i>
                                <input type="file" name="imagen" class="fileimagen"  accept="image/*" hidden >
                            </label>
                            <div class="border-primary">
                                <img  class="w-100 cargarimagen" height="253" style="background-color:#EBF5FB" src="{{$paquete->imagen}}">
                            </div>
                            @error('imagen')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="float-right">
                    <a href="{{route('paquete.index')}}"  class="btn btn-dark btn-rounded"><i class="fa fa-mail-reply-all"></i>CANCELAR</a>
                    <button  type="submit" class="btn btn-primary btn-rounded  mx-1"><i class="fa fa-save"></i>GUARDAR</button>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $('.fileimagen').change(function (event) {
            $(".cargarimagen").show();
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".cargarimagen").attr('src',tmppath);
            $('.btn_save_img').show();
        })
    </script>
@endsection
