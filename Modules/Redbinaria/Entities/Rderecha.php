<?php

namespace Modules\Redbinaria\Entities;

use Illuminate\Database\Eloquent\Model;

class Rderecha extends Model
{
    protected $table = 'rama_derechas';
    protected $fillable = ['id_afiliado_referidor','id_afiliado_referido'];
}
