<?php


namespace Modules\Administracion\Repository;

use Modules\Administracion\Entities\Reconsumo;

class RepositorioReconsumo
{
    public function listarReconsumo()
    {
        return Reconsumo::all();
    }

    public function crearReconsumo($datosReconsumo)
    {
        Reconsumo::create($datosReconsumo);
    }

    public function editarReconsumo($datosReconsumo,$id){

        $reconsumo = Reconsumo::find($id);
        $reconsumo->Update($datosReconsumo);
    }

    public function eliminarReconsumo($idReconsumo)
    {
        Reconsumo::destroy($idReconsumo);
    }
}
