<?php


namespace Modules\Redbinaria\Repository;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Redbinaria\Entities\Rderecha;
use Modules\Redbinaria\Entities\Rizquierda;

class RepositorioAfiliado
{
    //funcion que permite saber si es la raiz del arbol o el usuario administrador
    public function esNodoRaiz($nodoId)
    {
        $nodo=User::find($nodoId);
        if ($nodo->isRoot())
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function esNodoHoja($nodoIde)
    {
        $nodo=User::find($nodoIde);
        if ($nodo->isLeaf())
        {
            return true;
        }
        else{
            return false;
        }
    }


    //verifica si existe si tiene hijo derecho de un nodo padre
    public function existeNodoHijoDerecho($idNodoPadre)
    {
        $nodoPadre=User::find($idNodoPadre);
        $nodosHijos=$nodoPadre->children;
        $nodoHijoDerecha=$nodosHijos->firstWhere('orden',2);
        if (isset($nodoHijoDerecha))
        {
            return true;
        }
        else{
            return false;
        }
    }
    //verifica si existe si tiene hijo izquierdo de un nodo padre
    public function existeNodoHijoIzquierdo($idNodoPadre)
    {
        $nodoPadre=User::find($idNodoPadre);
        $nodosHijos=$nodoPadre->children;
        $nodoHijoIzquierda=$nodosHijos->firstWhere('orden',1);
        if (isset($nodoHijoIzquierda))
        {
            return true;
        }
        else{
            return false;
        }
    }

    //funcion que permite crear un nodo hijo
    public function crearNodoHijo($datosusuario)
    {
        $datos=[
            'nombre'            =>$datosusuario->nombre,
            'apellido'          =>$datosusuario->apellido,
            'identificacion'    =>$datosusuario->identificacion,
            'fecha_nacimiento'  =>$datosusuario->fecha_nacimiento,
            'numero_telefonico' =>$datosusuario->numero_telefonico,
            'pais'              =>$datosusuario->pais,
            'email'             =>$datosusuario->email,
            'usuario'           =>$datosusuario->usuario,
            'orden'             =>$datosusuario->orden,
            'parent_id'         =>$datosusuario->idNodoPadre,
            'password'        =>Hash::make($datosusuario->password)
        ];
      $nodoHijoRegistrado =  User::create($datos);
      return $nodoHijoRegistrado;
    }

    public function EnlazarNodoHijoConNodoPadre($idNodoPadre,$nodoHijoRegistrado){

        $nodoRaiz = User::find($idNodoPadre);
        $nodoRaiz->appendNode($nodoHijoRegistrado);
    }

    public function hijoOPadreUltimoIzquierda($NodoPadre)
    {
        if ($NodoPadre->isLeaf()){
            return $NodoPadre;
        }
        else{
            $nodosHijos=$NodoPadre->children;
            $nuevoPadre=$nodosHijos->firstWhere('orden',1);
            if(isset($nuevoPadre)){
                return  $this->hijoOPadreUltimoIzquierda($nuevoPadre);
            }
            else
            {
                return $NodoPadre;
            }

        }

    }

    public function hijoOPadreUltimoDerecha($NodoPadre)
    {
        if ($NodoPadre->isLeaf()){
            return $NodoPadre;
        }
        else{
            $nodosHijos=$NodoPadre->children;
            $nuevoPadre=$nodosHijos->firstWhere('orden',2);
            if(isset($nuevoPadre)){
                return  $this->hijoOPadreUltimoDerecha($nuevoPadre);
            }
            else
            {
                return $NodoPadre;
            }
        }
    }

    public function buscarNodo($idNodo)
    {
        return User::find($idNodo);
    }


}
