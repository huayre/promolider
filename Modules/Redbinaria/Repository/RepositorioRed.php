<?php


namespace Modules\Redbinaria\Repository;

use App\Models\User;

class RepositorioRed
{
    //funcion debuelve un arbol bonario
     public function listaRed()
     {
        return $ListaAfiliados=User::where('parent_id',null)->get();
        // return $ListaAfiliados=User::get()->toTree();
         //$id=User::find(1);
        // return $id->children;

     }

}
