<?php


namespace Modules\Redbinaria\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Administracion\Service\CursoServicio;
use Modules\Redbinaria\Service\ServicioOficina;

class OficinaController extends Controller
{
    private $ServicioOficina;
    public function __construct(ServicioOficina $ServicioOficina)
    {
        $this->ServicioOficina = $ServicioOficina;
    }

    public function oficina()
    {
        $urls=$this->ServicioOficina->UrlsOficcina();
        $urlAfiliacionDerecha = $urls[0];
        $urlAfiliacionIzquierda = $urls[1];

      return view('redbinaria::oficina.oficina')->with(['urlAfiliacionDerecha'=>$urlAfiliacionDerecha,'urlAfiliacionIzquierda'=>$urlAfiliacionIzquierda]);
    }

    public function inicio($id_afiliado,$rama)
    {
      $datosPatrocinante=$this->ServicioOficina->datosPatrocinante($id_afiliado);
      return view('redbinaria::oficina.inicio')->with(['datosPatrocinante'=>$datosPatrocinante,'rama'=>$rama,'id_afiliado'=>$id_afiliado]);
    }

    public function cursos($id_afiliado,$rama){
        $datosPatrocinante=$this->ServicioOficina->datosPatrocinante($id_afiliado);
        $listadoCursos = $this->ServicioOficina->listaCursos();
        return view('redbinaria::oficina.cursos')->with(['listadoCursos'=>$listadoCursos,'datosPatrocinante'=>$datosPatrocinante,'rama'=>$rama,'id_afiliado'=>$id_afiliado]);
    }

    public function detalleCurso($id_afiliado,$rama,$id_curso)
    {
        $datosPatrocinante=$this->ServicioOficina->datosPatrocinante($id_afiliado);
        $curso=$this->ServicioOficina->buscarCurso($id_curso);
        return view('redbinaria::oficina.detalle_curso')->with(['curso'=>$curso,'datosPatrocinante'=>$datosPatrocinante,'rama'=>$rama,'id_afiliado'=>$id_afiliado]);
    }

    public function registro($id_afiliado,$rama)
    {
        $datosPatrocinante=$this->ServicioOficina->datosPatrocinante($id_afiliado);
        $listaPaquetes = $this->ServicioOficina->listadoPaquetes();
        return view('redbinaria::oficina.registro')->with(['listaPaquetes'=>$listaPaquetes,'datosPatrocinante'=>$datosPatrocinante,'rama'=>$rama,'id_afiliado'=>$id_afiliado]);
    }



}
