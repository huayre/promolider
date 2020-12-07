<?php


namespace Modules\Administracion\Repository;


use Modules\Administracion\Entities\Anuncio;

class AnuncioRepositorio
{
    public function listaAnuncios()
    {
        return Anuncio::all();
    }

}
