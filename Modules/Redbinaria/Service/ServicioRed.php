<?php


namespace Modules\Redbinaria\Service;




use Modules\Redbinaria\Repository\RepositorioRed;

class ServicioRed
{
     private $RepositorioRed;
     public function __construct(RepositorioRed $RepositorioRed)
     {
         $this->RepositorioRed=$RepositorioRed;
     }
     public function ListaAfiliados()
     {
        return $this->RepositorioRed->listaRed();
     }
}
