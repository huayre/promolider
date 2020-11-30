<?php

namespace Modules\Autenticacion\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Autenticacion\Http\Requests\LoginRequest;
use Modules\Autenticacion\Http\Requests\RequestCuenta;
use Modules\Autenticacion\Service\ServicioUsuario;
use Yoeunes\Toastr\Facades\Toastr;

class AutenticacionController extends Controller
{
    private $ServicioUsuario;
    public function __construct(ServicioUsuario $ServicioUsuario)
    {
        $this->ServicioUsuario=$ServicioUsuario;
    }

   public function vistaLogin()
   {
      if ($this->ServicioUsuario->verificarUserLogeado())
      {
          return redirect()->intended('inicio');
      }
       return view('autenticacion::login');
   }

   public function login(LoginRequest $request)
   {

      if ($this->ServicioUsuario->accesoSistema($request)){
          return redirect()->intended('inicio');
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
