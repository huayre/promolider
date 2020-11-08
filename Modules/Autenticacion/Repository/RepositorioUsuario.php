<?php


namespace Modules\Autenticacion\Repository;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RepositorioUsuario
{
  //funcion que permite aperturar una nueva cuenta
 public function crearCuenta($datosusuario)
 {
     $datos=[
         'nombre'            =>$datosusuario->nombre,
         'apellido'          =>$datosusuario->apellido,
         'identificacion'    =>$datosusuario->identificacion,
         'fecha_nacimiento'  =>$datosusuario->fecha_nacimiento,
         'numero_telefonico' =>$datosusuario->numero_telefonico,
         'pais'              =>$datosusuario->pais,
         'email'             =>$datosusuario->email,
         'usuario'           =>$datosusuario->usuario,
         'contraseña'        =>Hash::make($datosusuario->contraseña)
     ];
    User::create($datos);
 }
 //Funcione que permite buscar un Usuario por el campo "usuario"
 public function BuscarUsuario($usario_buscar)
 {
     return User::whereUsuario($usario_buscar)->first();
 }


}
