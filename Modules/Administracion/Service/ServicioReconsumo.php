<?php


namespace Modules\Administracion\Service;
use Illuminate\Support\Facades\Storage;
use Modules\Administracion\Repository\RepositorioReconsumo;

class ServicioReconsumo
{
    private $RepositorioReconsumo;

    public function __construct(RepositorioReconsumo $RepositorioReconsumo)
    {
        $this->RepositorioReconsumo = $RepositorioReconsumo;
    }

    public function listadoReconsumo()
    {
        return $this->RepositorioReconsumo->listarReconsumo();
    }

    public function crearReconsumo($datosReconsumo)
    {
        if($datosReconsumo->hasFile('imagen')){
            $rutaImagen = $this->GuardarImagenReconsumos($datosReconsumo->imagen);
            $datosReconsumoCrear =[
                'nombre'                    =>$datosReconsumo->nombre,
                'descripcion'               =>$datosReconsumo->descripcion,
                'precio_venta'              =>$datosReconsumo->precio_venta,
                'iva'                       =>$datosReconsumo->iva,
                'porcentaje_comisionable'   =>$datosReconsumo->porcentaje_comisionable,
                'valor_comisionable'        =>$datosReconsumo->valor_comisionable,
                'imagen'                    =>$rutaImagen
            ];
            $this->RepositorioReconsumo->crearReconsumo($datosReconsumoCrear);
        }
    }

    public function editarReconsumo($datosReconsumo,$idReconsumo)
    {
        //condicion si se modifica la imagen
        if($datosReconsumo->hasFile('imagen')){
            $rutaImagen = $this->GuardarImagenReconsumos($datosReconsumo->imagen);
            $datosReconsumoActualizar = [
                'nombre'                    =>$datosReconsumo->nombre,
                'descripcion'               =>$datosReconsumo->descripcion,
                'precio_venta'              =>$datosReconsumo->precio_venta,
                'iva'                       =>$datosReconsumo->iva,
                'porcentaje_comisionable'   =>$datosReconsumo->porcentaje_comisionable,
                'valor_comisionable'        =>$datosReconsumo->valor_comisionable,
                'imagen'                    =>$rutaImagen
            ];
            $this->RepositorioReconsumo->editarReconsumo($datosReconsumoActualizar,$idReconsumo);
        }
        else
        {//Condicion si no se modifico la imagen
            $datosReconsumoActualizar = [
                'nombre'                    =>$datosReconsumo->nombre,
                'descripcion'               =>$datosReconsumo->descripcion,
                'precio_venta'              =>$datosReconsumo->precio_venta,
                'iva'                       =>$datosReconsumo->iva,
                'porcentaje_comisionable'   =>$datosReconsumo->porcentaje_comisionable,
                'valor_comisionable'        =>$datosReconsumo->valor_comisionable
            ];
            $this->RepositorioReconsumo->editarReconsumo($datosReconsumoActualizar,$idReconsumo);
        }
    }

    public function eliminarReconsumo($idReconsumo)
    {
        $this->RepositorioReconsumo->eliminarReconsumo($idReconsumo);
    }


    //Función que permite guardar una imagen en public/imagenes/paquetes y retorna la ruta absoluta de la imagen
    public function GuardarImagenReconsumos($imagen){
        $rutaRelativaImagen = $imagen->store('public/imagenes/reconsumos');
        $rutaRelativaImagen=Storage::url($rutaRelativaImagen);
        $rutaAbsolutaImagen=asset($rutaRelativaImagen);
        return $rutaAbsolutaImagen;
    }
}
