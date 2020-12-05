<?php


namespace Modules\Administracion\Repository;


use Illuminate\Support\Facades\Auth;
use Modules\Administracion\Entities\Capacidad;
use Modules\Administracion\Entities\Curso;

class RepositorioCurso
{
    public function listaCurso()
    {
        return Curso::all();
    }
    public function crearCurso($datosCurso)
    {
         $curso=Curso::create($datosCurso);

         return $curso;
    }

    public function crearCapacidad($capacidad,$idCurso)
    {
       Capacidad::create([
           'curso_id'   =>$idCurso,
           'contenido'  =>$capacidad
       ]);
    }
}
