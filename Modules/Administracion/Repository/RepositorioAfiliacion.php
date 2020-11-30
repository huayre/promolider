<?php


namespace Modules\Administracion\Repository;


use Modules\Administracion\Entities\Afiliacion;

class RepositorioAfiliacion
{
     public function listarAfiliaciones()
     {
         return Afiliacion::all();
     }

     public function crearAfiliacion($datosAfiliacion)
     {
         Afiliacion::create($datosAfiliacion->all());
     }
     public function eliminarAfiliacion($idAfiliacion)
     {
         Afiliacion::destroy($idAfiliacion);
     }
}
