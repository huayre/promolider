<?php


namespace Modules\Administracion\Service;


use Illuminate\Support\Facades\Storage;
use Modules\Administracion\Repository\RepositorioCurso;

class ServiceCurso
{
    private $RepositorioCurso;
    public function __construct(RepositorioCurso $RepositorioCurso)
    {
        $this->RepositorioCurso=$RepositorioCurso;
    }

    public function aperturarCurso($datosCurso)
    {
        //guarda imagen del curso
        $imagen = $datosCurso->file('imagen')->store('public/imagenes/cursos');
        $ruta = Storage::url($imagen);
        $rutaImagenCurso = asset($ruta);
        //guardar curso
       $cursoCreado = $this->RepositorioCurso->crearCurso($datosCurso,$rutaImagenCurso);
        //guardar las caoacidades del curso
       $contador = 0;
       $cantidadCapacidades = count($datosCurso->capacidad);
       while ($contador<$cantidadCapacidades)
       {
           $this->RepositorioCurso->crearCapacidad($datosCurso->capacidad[$contador],$cursoCreado->id);
           $contador++;
       }

    }


}
