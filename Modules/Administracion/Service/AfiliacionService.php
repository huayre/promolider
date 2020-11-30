<?php


namespace Modules\Administracion\Service;


use Modules\Administracion\Repository\RepositorioAfiliacion;

class AfiliacionService
{
  private $RepositorioAfiliacion;

  public function __construct(RepositorioAfiliacion $RepositorioAfiliacion)
  {
      $this->RepositorioAfiliacion = $RepositorioAfiliacion;
  }

  public function listadoAfiliacion()
  {
      return $this->RepositorioAfiliacion->listarAfiliaciones();
  }

  public function crearNuevaAfiliacion($datosAfiliacion)
  {
      $this->RepositorioAfiliacion->crearAfiliacion($datosAfiliacion);
  }

  public function eliminarAfiliacion($idAfiliacion)
  {
      $this->RepositorioAfiliacion->eliminarAfiliacion($idAfiliacion);
  }
}
