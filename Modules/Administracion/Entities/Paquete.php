<?php


namespace Modules\Administracion\Entities;


use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{

  protected $fillable = ['nombre','precio_venta','iva','descuento_compras','porcentaje_corte_binario','bono_efectivo_rapido','imagen'];
}
