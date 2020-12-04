@extends('plantilla.index')
@section('contenido')
      <div class="card">
          <div>
              <p class="text-center text-primary display-4 font-weight-bold">NUEVO CURSO</p>
          </div>
          <div class="card-body">
              <div class="float-right">
                  <a href="{{route('curso.index')}}"  class="btn btn-dark btn-rounded"><i class="fa fa-mail-reply-all"></i>CANCELAR</a>
              </div>
              <div class="mb-5 p-4 bg-white shadow-sm">
                  <div  class="bs-stepper linear">
                      <div class="bs-stepper-header" role="tablist">
                          <div class="step active" data-target="#valores-curso">
                              <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1" aria-selected="true">
                                  <span class="bs-stepper-circle">1</span>

                                  <span class="bs-stepper-label"> <i class="fa fa-book"></i>Valores</span>
                              </button>
                          </div>
                          <div class="bs-stepper-line bg-primary"></div>
                          <div class="step" data-target="#diseño-curso">
                              <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2" aria-selected="false" disabled="disabled">
                                  <span class="bs-stepper-circle">2</span>
                                  <i class="fa fa-image"></i>
                                  <span class="bs-stepper-label">Diseño</span>
                              </button>
                          </div>
                          <div class="bs-stepper-line bg-primary"></div>
                          <div class="step" data-target="#capacidades-curso">
                              <button type="button" class="step-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3" aria-selected="false" disabled="disabled">
                                  <span class="bs-stepper-circle">3</span>
                                  <i class="fa  fa-graduation-cap"></i>
                                  <span class="bs-stepper-label">Capacidades</span>
                              </button>
                          </div>
                      </div>
                      <div class="bs-stepper-content">
                          <form  method="post" action="{{route('curso.store')}}" enctype="multipart/form-data">
                              @csrf
                              <div id="valores-curso" role="tabpanel" class="bs-stepper-pane active dstepper-block" aria-labelledby="stepper1trigger1">
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
                                              <input type="text" class="form-control border-primary @error('precio_venta') is-invalid @enderror" name="precio_venta" value="{{old('precio_venta')}}">
                                              @error('precio_venta')
                                              <small class="text-google">{{$message}}</small>
                                              @enderror
                                          </div>
                                          <div class="form-group">
                                              <label>IVA (%)<small class="text-google">requerido</small></label>
                                              <input type="text" class="form-control border-primary @error('iva') is-invalid @enderror" name="iva" value="{{old('iva')}}">
                                              @error('iva')
                                              <small class="text-google">{{$message}}</small>
                                              @enderror
                                          </div>
                                      </div>
                                      <div class="col-md-6">

                                          <div class="form-group">
                                              <label>Procentaje Comisionable (%) <small class="text-google">requerido</small></label>
                                              <input type="text" class="form-control border-primary @error('porcentaje_comisionable') is-invalid @enderror" name="porcentaje_comisionable" value="{{old('porcentaje_comisionable')}}">
                                              @error('porcentaje_comisionable')
                                              <small class="text-google">{{$message}}</small>
                                              @enderror
                                          </div>
                                          <div class="form-group">
                                              <label>Idioma <small class="text-google">requerido</small></label>
                                              <select name="idioma" class="form-control border-primary">
                                                  <option selected disabled>Seleccione</option>
                                                  <option value="español">Español</option>
                                                  <option value="ingles">Ingles</option>
                                                  <option value="portugués">Portugués</option>
                                              </select>
                                              @error('idioma')
                                              <small class="text-google">{{$message}}</small>
                                              @enderror
                                          </div>

                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-center">
                                      <button type="button" class="btn btn-primary" onclick="stepper1.next()"><i class="fa fa-arrow-right"></i></button>
                                  </div>
                              </div>
                              <div id="diseño-curso" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Descripción del Curso <small class="text-google">requerido</small></label>
                                          <textarea rows="5" class="form-control border-primary" name="descripcion"></textarea>
                                      </div>
                                      @error('descripcion')
                                      <small class="text-google">{{$message}}</small>
                                      @enderror
                                      <div class="form-group">
                                          <label>Imagen <small class="text-google">requerido</small></label>
                                          <label class="btn btn-light btn-file " style="cursor: pointer">
                                              <i class="fa fa-cloud-upload text-primary"></i>
                                              <input type="file" name="imagen" class="fileimagen"  accept="image/*" hidden>
                                          </label>
                                          <div class="border-primary d-flex justify-content-center">
                                              <img  class="w-75  cargarimagen" height="330" style="background-color:#EBF5FB">
                                          </div>
                                          @error('imagen')
                                          <small class="text-google">{{$message}}</small>
                                          @enderror

                                      </div>
                                  </div>
                                  <div class="d-flex justify-content-center">
                                      <button type="button"  class="btn btn-primary mr-2" onclick="stepper1.previous()"><i class="fa fa-arrow-left"></i></button>
                                      <button type="button"  class="btn btn-primary" onclick="stepper1.next()"><i class="fa fa-arrow-right"></i></button>
                                  </div>

                              </div>
                              <div id="capacidades-curso" role="tabpanel" class="bs-stepper-pane text-center" aria-labelledby="stepper1trigger3">
                                  <button type="button" class="btn btn-light mb-2" onclick="agregarCapacidad()"><i class="fa  fa-plus"></i>Capacidad</button>
                                  <small class="text-muted">Ingrese Almenos una Capacidad </small><small class="text-google">requerido</small>
                                  @error('capacidad')
                                  <small class="text-google">{{$message}}</small>
                                  @enderror
                                  <table class="table">
                                      <thead>
                                          <tr>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody id="listacapacidad">

                                      </tbody>
                                  </table>
                                  <div class="d-flex justify-content-center">
                                      <button type="button" class="btn btn-primary  mr-2" onclick="stepper1.previous()"><i class="fa fa-arrow-left"></i></button>
                                      <button type="submit" class="btn btn-primary "><i class="fa fa-save"></i>CREAR CURSO</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
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
        let stepper1 = new Stepper(document.querySelector('.bs-stepper'));
        let contador=0;
        function agregarCapacidad()
        {
            $html='<tr id="fila'+contador+'"><td><i class="fa fa-check fa-2x "></i></td><td><textarea name="capacidad[]" class="form-control border-primary"></textarea></td><td><button type="button" class="btn btn-light" onclick="eliminar('+contador+')"><i class="fa  fa-trash-o fa-2x text-google "></button></i></td></tr>'
            $('#listacapacidad').append($html);
            contador++;
        }

        function eliminar(idFila)
        {
            $("#fila"+idFila).remove();
        }
    </script>

@endsection
