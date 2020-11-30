<?php


namespace Modules\Administracion\Entities;


use Illuminate\Database\Eloquent\Model;

class Afiliacion extends Model
{
  protected $table = "afiliaciones";
  protected $fillable = ['nombre','precio','comisionable','iva','descuento_compra','porcentaje_corte_binario'];
}
