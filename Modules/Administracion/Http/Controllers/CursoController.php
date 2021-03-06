<?php

namespace Modules\Administracion\Http\Controllers;

use http\Env\Response;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administracion\Http\Requests\CrearCursoRequest;
use Modules\Administracion\Service\CursoServicio;

class CursoController extends Controller
{
    private $ServiceCurso;
    public function __construct(CursoServicio $ServiceCurso)
    {
        $this->ServiceCurso=$ServiceCurso;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {   $listadoCursos=$this->ServiceCurso->ListadoCursos();
        return view('administracion::cursos.index')->with(['listadoCursos'=>$listadoCursos]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('administracion::cursos.crear');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CrearCursoRequest $request)
    {
        $this->ServiceCurso->aperturarCurso($request);
        toastr()->success('Curso creado Correctamente..!!!','MENSAJE');
        return redirect()->route('curso.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('administracion::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('administracion::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
