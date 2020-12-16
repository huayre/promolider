<?php


namespace Modules\Administracion\Service;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Modules\Administracion\Repository\RepositorioCurso;

class CursoServicio
{
    private $RepositorioCurso;
    public function __construct(RepositorioCurso $RepositorioCurso)
    {
        $this->RepositorioCurso=$RepositorioCurso;
    }

    public function ListadoCursos()
    {
        return $this->RepositorioCurso->listaCurso();
    }

    //Funcion para crear un nuevo Curso con sus respectivas Capacidades
    public function aperturarCurso($datosCurso)
    {
        if ($datosCurso->hasFile('imagen')) {
            $rutaImagen= $this->GuardarImagenAfiliacion($datosCurso->imagen);
            $datosCursoCrear = [
                'nombre'                   =>$datosCurso->nombre,
                'descripcion'              =>$datosCurso->descripcion,
                'imagen'                   =>$rutaImagen,
                'afiliado_id'              =>Auth::id(),
                'idioma'                   =>$datosCurso->idioma,
                'precio_venta'             =>$datosCurso->precio_venta,
                'iva'                      =>$datosCurso->iva,
                'porcentaje_comisionable'  =>$datosCurso->porcentaje_comisionable,
                'valor_comisionable'       =>$datosCurso->precio_venta*($datosCurso->porcentaje_comisionable/100)
            ];
        }
        //crear curso
        $cursoCreado = $this->RepositorioCurso->crearCurso($datosCursoCrear);
        //guardar las caoacidades y relacionarlo con el  curso
       $contador = 0;
       $cantidadCapacidades = count($datosCurso->capacidad);
       while ($contador<$cantidadCapacidades)
       {
           $this->RepositorioCurso->crearCapacidad($datosCurso->capacidad[$contador],$cursoCreado->id);
           $contador++;
       }

    }

    //Función que permite guardar una imagen en public/imagenes/cursos y retorna la ruta absoluta de la imagen
    public function GuardarImagenAfiliacion($imagen){
        $rutaRelativaImagen = $imagen->store('public/imagenes/cursos');
        $rutaRelativaImagen=Storage::url($rutaRelativaImagen);
        $rutaAbsolutaImagen=asset($rutaRelativaImagen);
        return $rutaAbsolutaImagen;
    }


}
