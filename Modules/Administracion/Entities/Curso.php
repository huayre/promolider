<?php


namespace Modules\Administracion\Entities;


use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=['nombre','descripcion','imagen','afiliado_id',
                        'idioma','precio_venta','iva','porcentaje_comisionable','valor_comisionable'];
}
