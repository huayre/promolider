<?php

namespace Modules\Administracion\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Administracion\Entities\Reconsumo;
use Modules\Administracion\Http\Requests\ActualizarReconsumoRequest;
use Modules\Administracion\Http\Requests\CrearReconsumoRequest;
use Modules\Administracion\Service\ServicioReconsumo;

class ReconsumoController extends Controller
{
    private $ServicioReconsumo;

    public function __construct(ServicioReconsumo $ServicioReconsumo)
    {
        $this->ServicioReconsumo = $ServicioReconsumo;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $listaReconsumos=$this->ServicioReconsumo->listadoReconsumo();
        return View('administracion::reconsumos.index')->with(['listaReconsumos'=>$listaReconsumos]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('administracion::reconsumos.crear');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CrearReconsumoRequest $request)
    {
        $this->ServicioReconsumo->crearReconsumo($request);
        toastr()->success('Reconsumo creado Correctamente...!!', 'MENSAJE');

        return redirect()->route('reconsumo.index');
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
        $reconsumo = Reconsumo::findOrFail($id);

        return view('administracion::reconsumos.editar')->with(['reconsumo' =>$reconsumo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(ActualizarReconsumoRequest $request, $id)
    {
        $this->ServicioReconsumo->editarReconsumo($request, $id);
        toastr()->success('Reconsumo editado correctamente...!!!','MENSAJE');

        return redirect()->route('reconsumo.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->ServicioReconsumo->eliminarReconsumo($id);
        toastr()->success('Reconsumo eliminado Correctamente...!!', 'MENSAJE');
        return redirect()->route('reconsumo.index');
    }
}
