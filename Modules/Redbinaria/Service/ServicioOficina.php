<?php


namespace Modules\Redbinaria\Service;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Administracion\Repository\RepositorioCurso;
use Modules\Administracion\Repository\RepositorioPaquete;
use Modules\Redbinaria\Repository\RepositorioAfiliado;

class ServicioOficina
{
    private $RepositorioCurso;
    private $RepositorioAfiliado;
    private $RepositorioPaquete;
    public function __construct(RepositorioCurso $RepositorioCurso,RepositorioAfiliado $RepositorioAfiliado,RepositorioPaquete $RepositorioPaquete)
    {
        $this->RepositorioCurso = $RepositorioCurso;
        $this->RepositorioAfiliado = $RepositorioAfiliado;
        $this->RepositorioPaquete = $RepositorioPaquete;
    }

    public function listaCursos()
    {
        return $this->RepositorioCurso->listaCursoOficina();
    }

    public function datosPatrocinante($idAfiliado)
    {
        return $this->RepositorioAfiliado->buscarNodo($idAfiliado);
    }

    public function buscarCurso($idCurso)
    {
        return $this->RepositorioCurso->buscarCurso($idCurso);

    }
    public function UrlsOficcina()
    {

      $urlAfiliacionIzquierda=asset('oficina_inicio/'.Auth::id().'/1');
      $urlAfiliacionDerecha=asset('oficina_inicio/'.Auth::id().'/2');

      $urls=[$urlAfiliacionDerecha,$urlAfiliacionIzquierda];

      return $urls;
    }

    public function listadoPaquetes()
    {
        return $this->RepositorioPaquete->listarPaquetes();
    }


}
