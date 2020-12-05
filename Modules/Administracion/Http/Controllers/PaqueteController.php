<?php

namespace Modules\Administracion\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Administracion\Entities\Paquete;
use Modules\Administracion\Http\Requests\ActualizarPaqueteRequest;
use Modules\Administracion\Http\Requests\CrearPaqueteRequest;
use Modules\Administracion\Service\PaqueteServicio;

class PaqueteController extends Controller
{
    private $PaqueteService;
    public function __construct(PaqueteServicio $PaqueteService)
    {
        $this->PaqueteService = $PaqueteService;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $listaPaquetes=$this->PaqueteService->listadoPaquetesAfilicion();
        return view('administracion::paquetes.index')->with(['listaPaquetes'=>$listaPaquetes]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('administracion::paquetes.crear');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CrearPaqueteRequest $request)
    {
        $this->PaqueteService->crearPaqueteAfiliacion($request);
        toastr()->success('Afiliación creado Correctamente..!!!','MENSAJE');

        return redirect()->route('paquete.index');
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
        $paquete = Paquete::findOrFail($id);

        return view('administracion::paquetes.editar')->with(['paquete'=>$paquete]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(ActualizarPaqueteRequest $request, $id)
    {

        $this->PaqueteService->editarPaqueteAfiliacion($request, $id);
        toastr()->success('Afiliación editado Correctamente..!!!','MENSAJE');

        return redirect()->route('paquete.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->PaqueteService->eliminarPaqueteAfiliacion($id);
        toastr()->success('Afiliación eliminado Correctamente..!!!','MENSAJE');
        return redirect()->route('paquete.index');
    }
}
