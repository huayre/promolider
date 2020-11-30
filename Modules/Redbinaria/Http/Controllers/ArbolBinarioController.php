<?php

namespace Modules\Redbinaria\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Redbinaria\Service\ServicioRed;

class ArbolBinarioController extends Controller
{
    private $servicioRed;
    public  function __construct(ServicioRed $servicioRed)
    {
        $this->servicioRed=$servicioRed;
    }

    public function albolbinario()
    {
        $nodopadre=$this->servicioRed->ListaAfiliados();
       //return response()->json($nodopadre);
        return view('redbinaria::arbolbinario.mapa')->with(['nodopadre'=>$nodopadre]);
    }

}
