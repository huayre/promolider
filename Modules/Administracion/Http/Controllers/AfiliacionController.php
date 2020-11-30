<?php

namespace Modules\Administracion\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administracion\Http\Requests\AfiliacionRequest;
use Modules\Administracion\Service\AfiliacionService;

class AfiliacionController extends Controller
{
    private $AfiliacionService;
    public function __construct(AfiliacionService $AfiliacionService)
    {
        $this->AfiliacionService = $AfiliacionService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $listaAfiliacion=$this->AfiliacionService->listadoAfiliacion();
        return view('administracion::Afiliacion.index')->with(['listaAfiliacion'=>$listaAfiliacion]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('administracion::afiliacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(AfiliacionRequest $request)
    {
        $this->AfiliacionService->crearNuevaAfiliacion($request);
        toastr()->success('Afiliación creado Correctamente..!!!','MENSAJE');

        return redirect()->route('afiliacion.index');
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
        $this->AfiliacionService->eliminarAfiliacion($id);
        toastr()->success('Afiliación eliminado Correctamente..!!!','MENSAJE');
        return redirect()->route('afiliacion.index');
    }
}
