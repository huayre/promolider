<?php


namespace Modules\Autenticacion\Service;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Autenticacion\Repository\RepositorioUsuario;

class ServicioUsuario
{
    private $UsuarioRepositorio;
    public function __construct(RepositorioUsuario $UsuarioRepositorio)
    {
        $this->UsuarioRepositorio=$UsuarioRepositorio;
    }

    public function accesoSistema($credenciales)
    {
        //Se recupera el campo usuario y se busca en la base de datos al usuario con dicho campo
        $usario_buscar = $credenciales->usuario;
        $password = $credenciales->password;

        $usuario = $this->UsuarioRepositorio->BuscarUsuario($usario_buscar);

        if (isset($usuario) && Hash::check($password,$usuario->password)) {
            Auth::login($usuario);
            return  true;
        }
        else{
            session()->flash('error_credenciales','Las credenciales son incorrectas');
            return false;
        }

    }

}
