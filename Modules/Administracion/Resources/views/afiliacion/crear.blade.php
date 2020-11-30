@extends('plantilla.index')
@section('contenido')
    <div class="card">
        <div class="card-header bg-success p-2" >
            <p class="text-center text-light display-4">NUEVO PAQUETE DE AFILIACIÓN</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('afiliacion.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre <small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('nombre') is-invalid @enderror" name="nombre" value="{{old('nombre')}}">
                            @error('nombre')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Precio ($)<small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('precio') is-invalid @enderror" name="precio" value="{{old('precio')}}">
                            @error('precio')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Comisionable (%)</label>
                            <input type="text" class="form-control border-primary  @error('comisionable') is-invalid @enderror" name="comisionable" value="{{old('comisionable')}}">
                            @error('comisionable')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>IVA (%)</label>
                            <input type="text" class="form-control border-primary @error('iva') is-invalid @enderror" name="iva" value="{{old('iva')}}">
                            @error('iva')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Descuento (%) <small class="text-muted">en la compra para los cursos</small> <small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('descuento_compra') is-invalid @enderror" name="descuento_compra" value="{{old('descuento_compra')}}">
                            @error('descuento_compra')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Corte Binario (%) <small class="text-google">requerido</small></label>
                            <input type="text" class="form-control border-primary @error('porcentaje_corte_binario') is-invalid @enderror" name="porcentaje_corte_binario" value="{{old('porcentaje_corte_binario')}}">
                            @error('porcentaje_corte_binario')
                            <small class="text-google">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                            <label class="btn btn-default btn-file">
                                <i class="fa fa-cloud-upload text-primary fa-2x"></i>
                                <input type="file" name="url" class="fileimagen"  accept=".png, .jpg, .jpeg" hidden>
                            </label>
                        </div>
                        <div class="border-primary">
                            <img  class="w-100 cargarimagen" height="240" style="background-color:#EBF5FB">
                        </div>
                    </div>
                </div>


                <div class="float-right">
                    <a href="{{route('afiliacion.index')}}"  class="btn btn-dark btn-rounded"><i class="fa fa-mail-reply-all"></i>CANCELAR</a>
                    <button  type="submit" class="btn btn-primary btn-rounded  mx-1"><i class="fa fa-save"></i>CREAR</button>
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
