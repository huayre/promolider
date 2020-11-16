<?php



namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Redbinaria\Entities\Rderecha;
use Modules\Redbinaria\Entities\Rizquierda;
use Kalnoy\Nestedset\NodeTrait;

class User extends Authenticatable
{
    use HasFactory, Notifiable,NodeTrait;
    protected $table = 'afiliados';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'identificacion',
        'fecha_nacimiento',
        'numero_telefonico',
        'pais',
        'email',
        'usuario',
        'password',
        'orden'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hijos(){

        return $this->hasMany(User::class, 'parent_id');

    }

}

