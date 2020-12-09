<?php


namespace Modules\Administracion\Entities;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable=['nombre','descripcion','imagen','afiliado_id',
                        'idioma','precio_venta','iva','porcentaje_comisionable','valor_comisionable'];

    public function capacidades()
    {
        return $this->hasMany(Capacidad::class);
    }
    public function autor()
    {
        return $this->hasOne(User::class,'id','afiliado_id');
    }
}
