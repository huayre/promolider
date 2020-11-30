<?php

namespace Modules\Redbinaria\Entities;

use Illuminate\Database\Eloquent\Model;

class Rizquierda extends Model
{
    protected $table = 'rama_izquierdas';
    protected $fillable = ['id_afiliado_referidor','id_afiliado_referido'];
}
