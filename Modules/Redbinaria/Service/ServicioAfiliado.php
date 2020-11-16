<?php


namespace Modules\Redbinaria\Service;


use Illuminate\Support\Facades\Auth;
use Modules\Redbinaria\Repository\RepositorioAfiliado;

class ServicioAfiliado
{
    private $RepositorioAfiliado;
    public function __construct(RepositorioAfiliado $RepositorioAfiliado)
    {
        $this->RepositorioAfiliado=$RepositorioAfiliado;
    }

    public function crearNuevoAfiliado($datosUsuario)
    {
       if ($this->RepositorioAfiliado->esNodoRaiz($datosUsuario->usuarioId))
       {
         return  $this->crearNodosHijosDeRaiz($datosUsuario);
       }
       else
       {
           return $this->crearNodosHijosDeNodoPadre($datosUsuario);
       }


    }



    public function crearNodosHijosDeRaiz($datosUsuario)
    {
        $estado = true;

        if ($datosUsuario->orden==1 && $this->RepositorioAfiliado->existeNodoHijoIzquierdo($datosUsuario->usuarioId)==false)
        {
            $nodoHijoRegistrado=$this->RepositorioAfiliado->crearNodoHijo($datosUsuario);
            $this->RepositorioAfiliado->EnlazarNodoHijoConNodoPadre($datosUsuario->usuarioId,$nodoHijoRegistrado);

        }
        else{
            if ($datosUsuario->orden==2 && $this->RepositorioAfiliado->existeNodoHijoDerecho($datosUsuario->usuarioId)==false)
            {
                $nodoHijoRegistrado=$this->RepositorioAfiliado->crearNodoHijo($datosUsuario);
                $this->RepositorioAfiliado->EnlazarNodoHijoConNodoPadre($datosUsuario->usuarioId,$nodoHijoRegistrado);

            }
            else{
                $estado = false;
            }
        }

        return $estado;
    }

    public function crearNodosHijosDeNodoPadre($datosUsuario)
    {
        $estado = true;

        if ($datosUsuario->orden==1)
        {
           $nodoHijoRegistrado=$this->RepositorioAfiliado->crearNodoHijo($datosUsuario);
            $nodoPadre=$this->RepositorioAfiliado->buscarNodo($datosUsuario->idNodoPadre);

           $nodonuevoPadre=$this->RepositorioAfiliado->hijoOPadreUltimoIzquierda($nodoPadre);
            $this->RepositorioAfiliado->EnlazarNodoHijoConNodoPadre($nodonuevoPadre->id,$nodoHijoRegistrado);

        }
        else{
            if ($datosUsuario->orden==2)
            {
                $nodoHijoRegistrado=$this->RepositorioAfiliado->crearNodoHijo($datosUsuario);
                $nodoPadre=$this->RepositorioAfiliado->buscarNodo($datosUsuario->idNodoPadre);
                $nodonuevoPadre=$this->RepositorioAfiliado->hijoOPadreUltimoDerecha($nodoPadre);
                $this->RepositorioAfiliado->EnlazarNodoHijoConNodoPadre($nodonuevoPadre->id,$nodoHijoRegistrado);

            }
            else{
                $estado = false;
            }
        }


        return $estado;
    }
}
