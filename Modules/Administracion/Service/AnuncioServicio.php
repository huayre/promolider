<?php


namespace Modules\Administracion\Service;


use Modules\Administracion\Repository\AnuncioRepositorio;

class AnuncioServicio
{
    private $AnuncioRepositorio;
    public function __construct(AnuncioRepositorio $AnuncioRepositorio)
    {
        $this->AnuncioRepositorio = $AnuncioRepositorio;
    }

    public function listaAnuncios()
    {
        return $this->AnuncioRepositorio->listaAnuncios();
    }

}
