<?php

namespace Modules\Autenticacion\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Autenticacion\Http\Requests\LoginRequest;
use Modules\Autenticacion\Http\Requests\RequestUsuario;
use Modules\Autenticacion\Service\ServicioUsuario;

class AutenticacionController extends Controller
{
    private $ServicioUsuario;
    public function __construct(ServicioUsuario $ServicioUsuario)
    {
        $this->ServicioUsuario=$ServicioUsuario;
    }

    //** Permite mostrar la vista para un nuevo registro **//
   public function nuevoregistro()
   {
       return view('autenticacion::registro');
   }
    //** Permite registrar a los afiliados **//
   public function registro(RequestUsuario $request)
   {
      $this->ServicioUsuario->crearNuevoAfiliado($request);
      toastr()->success('Data has been saved successfully!');
   }

   public function login(LoginRequest $request)
   {

      if ($this->ServicioUsuario->accesoSistema($request)){
          return redirect()->route('inicio');
      }
      else{
          return redirect()->route('login');
      }
   }

   public function cerrarSesion()
   {
       Auth::logout();

       return redirect()->route('login');
   }
}
