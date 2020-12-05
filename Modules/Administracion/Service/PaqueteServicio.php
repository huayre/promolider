<?php


namespace Modules\Administracion\Service;


use Illuminate\Support\Facades\Storage;
use Modules\Administracion\Repository\RepositorioPaquete;

class PaqueteServicio
{
  private $RepositorioPaquete;

  public function __construct(RepositorioPaquete $RepositorioPaquete)
  {
      $this->RepositorioPaquete = $RepositorioPaquete;
  }

    public function listadoPaquetesAfilicion()
    {
        return $this->RepositorioPaquete->listarPaquetes();
    }

    public function crearPaqueteAfiliacion($datosPaquete)
    {
        if ($datosPaquete->hasFile('imagen')) {
            $rutaImagen= $this->GuardarImagenAfiliacion($datosPaquete->imagen);
            $datosPaqueteCrear = [
                'nombre'                    =>$datosPaquete->nombre,
                'precio_venta'              =>$datosPaquete->precio_venta,
                'iva'                       =>$datosPaquete->iva,
                'descuento_compras'         =>$datosPaquete->descuento_compras,
                'porcentaje_corte_binario'  =>$datosPaquete->porcentaje_corte_binario,
                'bono_efectivo_rapido'      =>$datosPaquete->bono_efectivo_rapido,
                'imagen'                    =>$rutaImagen
            ];
            $this->RepositorioPaquete->crearPaquete($datosPaqueteCrear);
        }

    }

    public function editarPaqueteAfiliacion($datosPaquete, $idPaquete)
    {
       //condicion si modifico la imagen
        if ($datosPaquete->hasFile('imagen')) {
           $rutaImagen= $this->GuardarImagenAfiliacion($datosPaquete->imagen);
           $datosPaqueteActualizar = [
               'nombre'                    =>$datosPaquete->nombre,
               'precio_venta'              =>$datosPaquete->precio_venta,
               'iva'                       =>$datosPaquete->iva,
               'descuento_compras'         =>$datosPaquete->descuento_compras,
               'porcentaje_corte_binario'  =>$datosPaquete->porcentaje_corte_binario,
               'bono_efectivo_rapido'      =>$datosPaquete->bono_efectivo_rapido,
               'imagen'                    =>$rutaImagen
           ];
           $this->RepositorioPaquete->editarPaquete($datosPaqueteActualizar,$idPaquete);
        }
        else
        {//condicion si no se modifico la imagen

            $datosPaqueteActualizar = [
                'nombre'                    =>$datosPaquete->nombre,
                'precio_venta'              =>$datosPaquete->precio_venta,
                'iva'                       =>$datosPaquete->iva,
                'descuento_compras'         =>$datosPaquete->descuento_compras,
                'porcentaje_corte_binario'  =>$datosPaquete->porcentaje_corte_binario,
                'bono_efectivo_rapido'      =>$datosPaquete->bono_efectivo_rapido
            ];
            $this->RepositorioPaquete->editarPaquete($datosPaqueteActualizar,$idPaquete);
        }

    }

  //funcion que permiter eliminnar una afiliación
  public function eliminarPaqueteAfiliacion($idAfiliacion)
  {
      $this->RepositorioPaquete->eliminarPaquete($idAfiliacion);
  }

 //Función que permite guardar una imagen en public/imagenes/paquetes y retorna la ruta absoluta de la imagen
  public function GuardarImagenAfiliacion($imagen){
      $rutaRelativaImagen = $imagen->store('public/imagenes/paquetes');
      $rutaRelativaImagen=Storage::url($rutaRelativaImagen);
      $rutaAbsolutaImagen=asset($rutaRelativaImagen);
      return $rutaAbsolutaImagen;
  }
}
