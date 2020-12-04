<?php


namespace Modules\Administracion\Repository;


use Illuminate\Support\Facades\Auth;
use Modules\Administracion\Entities\Capacidad;
use Modules\Administracion\Entities\Curso;

class RepositorioCurso
{
    public function crearCurso($datosCurso,$rutaImagenCurso)
    {
         $curso=Curso::create([
             'nombre'                   =>$datosCurso->nombre,
             'descripcion'              =>$datosCurso->descripcion,
             'imagen'                   =>$rutaImagenCurso,
             'afiliado_id'              =>Auth::id(),
             'idioma'                   =>$datosCurso->idioma,
             'precio_venta'             =>$datosCurso->precio_venta,
             'iva'                      =>$datosCurso->iva,
             'porcentaje_comisionable'  =>$datosCurso->porcentaje_comisionable,
             'valor_comisionable'       =>$datosCurso->precio_venta*$datosCurso->porcentaje_comisionable
         ]);

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
