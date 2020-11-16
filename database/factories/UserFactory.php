<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'            =>'Roy Carlos',
            'apellido'          =>'Huayre Bujaico',
            'identificacion'    =>'76044636',
            'fecha_nacimiento'  =>'14/05/1997',
            'numero_telefonico' =>'929792508',
            'pais'              =>1,
            'email'             =>'admin@gmail.com',
            'usuario'           =>'admin',
            'contraseña'        =>Hash::make('admin')
        ];
    }
}
