<?php


namespace Modules\Redbinaria\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RepositorioRed
{
    //funcion debuelve un arbol bonario
     public function listaRed()
     {
         $idNodoPadre=Auth::id();
        return $ListaAfiliados=User::where('id',$idNodoPadre)->get();
        // return $ListaAfiliados=User::get()->toTree();
         //$id=User::find(1);
        // return $id->children;

     }

}
