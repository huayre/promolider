<?php

namespace Modules\Redbinaria\Http\Controllers;



use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controller;
use Modules\Redbinaria\Http\Requests\RequestCuenta;
use Modules\Redbinaria\Service\ServicioAfiliado;

class AfiliadoController extends Controller
{
    private $ServicioAfiliado;
    public function __construct(ServicioAfiliado $ServicioAfiliado)
    {
        $this->ServicioAfiliado=$ServicioAfiliado;
    }

    //** Permite mostrar la vista para un nuevo registro **//
    public function nuevoregistro()
    {
        return view('redbinaria::afiliado.nuevo');
    }

    //** Permite registrar a los afiliados **//
    public function registro(RequestCuenta $request)
    {

       if ($this->ServicioAfiliado->crearNuevoAfiliado($request)){
           echo 'registro existoso';
       }
       else{
           echo 'fallo registro';
       }



    }
}
