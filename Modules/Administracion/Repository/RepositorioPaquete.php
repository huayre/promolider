<?php


namespace Modules\Administracion\Repository;


use Modules\Administracion\Entities\Paquete;

class RepositorioPaquete
{
     public function listarPaquetes()
     {
         return Paquete::all();
     }

     public function crearPaquete($datosPaquete,$ruta)
     {
        Paquete::create([
            'nombre'                    =>$datosPaquete->nombre,
            'precio_venta'              =>$datosPaquete->precio_venta,
            'iva'                       =>$datosPaquete->iva,
            'descuento_compras'         =>$datosPaquete->descuento_compras,
            'porcentaje_corte_binario'  =>$datosPaquete->porcentaje_corte_binario,
            'bono_efectivo_rapido'      =>$datosPaquete->bono_efectivo_rapido,
            'imagen'                    =>$ruta
        ]);
     }



     public function editarPaquete($datosPaquete,$ruta,$id){

         $paquete = Paquete::find($id);
         $paquete->Update([
             'nombre'                    =>$datosPaquete->nombre,
             'precio_venta'              =>$datosPaquete->precio_venta,
             'iva'                       =>$datosPaquete->iva,
             'descuento_compras'         =>$datosPaquete->descuento_compras,
             'porcentaje_corte_binario'  =>$datosPaquete->porcentaje_corte_binario,
             'bono_efectivo_rapido'      =>$datosPaquete->bono_efectivo_rapido,
             'imagen'                    =>$ruta
         ]);


     }

     public function eliminarPaquete($idPaquete)
     {
         Paquete::destroy($idPaquete);
     }
}
