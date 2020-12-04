<?php


namespace Modules\Administracion\Service;


use Illuminate\Support\Facades\Storage;
use Modules\Administracion\Repository\RepositorioPaquete;

class PaqueteService
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
        $imagen = $datosPaquete->file('imagen')->store('public/imagenes/paquetes');
        $ruta=Storage::url($imagen);
        $ruta=asset($ruta);
        $this->RepositorioPaquete->crearPaquete($datosPaquete,$ruta);
    }

    public function editarPaqueteAfiliacion($datosPaquete, $id)
    {

        if ($datosPaquete->hasFile('imagen')) {

            $imagen = $datosPaquete->file('imagen')->store('public/imagenes/paquetes');

        }
        $ruta=Storage::url($imagen);
        $ruta=asset($ruta);
        $this->RepositorioPaquete->editarPaquete($datosPaquete,$ruta,$id);
    }


  public function eliminarPaqueteAfiliacion($idAfiliacion)
  {
      $this->RepositorioPaquete->eliminarPaquete($idAfiliacion);
  }
}
