<?php


namespace Modules\Administracion\Entities;


use Illuminate\Database\Eloquent\Model;

class Capacidad extends Model
{
    protected $table = 'capacidades';
    protected $fillable = ['curso_id','contenido'];

}
