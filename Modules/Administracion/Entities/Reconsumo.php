<?php


namespace Modules\Administracion\Entities;


use Illuminate\Database\Eloquent\Model;

class Reconsumo extends Model
{
    protected $fillable = ['nombre','descripcion','precio_venta','iva','porcentaje_comisionable','valor_comisionable','imagen'];
}
