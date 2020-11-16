<?php


namespace Modules\Autenticacion\Repository;


use App\Models\User;

class RepositorioUsuario
{

 //Funcione que permite buscar un Usuario por el campo "usuario"
 public function BuscarUsuario($usario_buscar)
 {
     return User::whereUsuario($usario_buscar)->first();
 }


}
