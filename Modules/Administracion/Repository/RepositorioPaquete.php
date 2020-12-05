<?php


namespace Modules\Administracion\Repository;


use Modules\Administracion\Entities\Paquete;

class RepositorioPaquete
{
     public function listarPaquetes()
     {
         return Paquete::all();
     }

     public function crearPaquete($datosPaquete)
     {
        Paquete::create($datosPaquete);
     }



     public function editarPaquete($datosPaquete,$id){

         $paquete = Paquete::find($id);
         $paquete->Update($datosPaquete);
     }

     public function eliminarPaquete($idPaquete)
     {
         Paquete::destroy($idPaquete);
     }
}
