<?php


namespace Modules\Administracion\Entities;


use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
   protected $fillable = ['mensaje','estado'];
}
