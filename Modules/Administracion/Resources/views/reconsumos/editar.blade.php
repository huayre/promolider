@extends('plantilla.index')
@section('contenido')
    <div class="card">
        <div class="card-header bg-success p-2">
            <p class="text-center text-light display-4">EDITAR RECONSUMO</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('reconsumo.update',$reconsumo->id) }}" enctype="multipart/form-data">
            @csrf @method('PATCH')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre <small class="text-google">requerido</small></label>
                            <input
                                type="text"
                                class="form-control border-primary @error('nombre') is-invalid @enderror"
                                name="nombre"
                                value="{{ $reconsumo->nombre }}">
                            @error('nombre')
                                <small class="text-google">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Descripcion <small class="text-google">requerido</small></label>
                            <input
                                type="text"
                                class="form-control border-primary @error('descripcion') is-invalid @enderror"
                                name="descripcion"
                                value="{{ $reconsumo->descripcion }}">
                            @error('descripcion')
                                <small class="text-google">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Precio Venta <small class="text-google">requerido</small></label>
                            <input
                                type="text"
                                class="form-control border-primary @error('precio_venta') is-invalid @enderror"
                                id="valor1"
                                oninput="calcular()"
                                name="precio_venta"
                                value="{{ $reconsumo->precio_venta }}">
                            @error('precio_venta')
                                <small class="text-google">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>IVA <small class="text-google">requerido</small></label>
                            <input
                                type="text"
                                class="form-control border-primary @error('iva') is-invalid @enderror"
                                name="iva"
                                value="{{ $reconsumo->iva }}">
                            @error('iva')
                                <small class="text-google">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Porcentaje Comisionable <small class="text-google">requerido</small></label>
                            <input
                                type="text"
                                class="form-control border-primary @error('porcentaje_comisionable') is-invalid @enderror"
                                id="valor2"
                                oninput="calcular()"
                                name="porcentaje_comisionable"
                                value="{{ $reconsumo->porcentaje_comisionable }}">
                            @error('porcentaje_comisionable')
                                <small class="text-google">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input
                                type="hidden"
                                class="form-control border-primary"
                                id="total"
                                name="valor_comisionable"
                                value="{{ $reconsumo->valor_comisionable }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Imagen <small class="text-google">requerido</small></label>
                            <label class="btn btn-light btn-file" style="cursor:pointer">
                                <i class="fa fa-cloud-upload text-primary"></i>
                                <input type="file" name="imagen" class="fileimagen" hidden accept="image/*">
                            </label>
                            <div class="border-primary">
                                <img class="w-100 cargarimagen" height="253" style="background-color:#EBF5FB" src="{{ $reconsumo->imagen }}">
                            </div>
                            @error('imagen')
                                <small class="text-google">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <a href="{{ route('reconsumo.index') }}" class="btn btn-dark btn-rounded">
                        <i class="fa fa-mail-reply-all"></i>CANCELAR
                    </a>
                    <button type="submit" class="btn btn-primary btn-rounded mx-1"><i class="fa fa-save"></i>GUARDAR</button>
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
        });

        function calcular(){
            try {
                var a = parseFloat(document.getElementById("valor1").value) || 0,
                    b = parseFloat(document.getElementById("valor2").value) || 0;

                    document.getElementById("total").value =a * (b/100);
            } catch (e) {

            }
        }
    </script>
@endsection
