<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Administracion\Entities\Anuncio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
         //   AfiliacionSeeder::class
        ]);

       /* User::create([
                'nombre'            =>'Roy Carlos',
                'apellido'          =>'Huayre Bujaico',
                'identificacion'    =>'76044636',
                'fecha_nacimiento'  =>'1997-05-14',
                'numero_telefonico' =>'929792508',
                'pais'              =>1,
                'email'             =>'admin@gmail.com',
                'usuario'           =>'admin',
                'password'        =>Hash::make('admin')
        ]);
       */
        Anuncio::create([
            'mensaje'=>'hola con todosmensaje 1',
            'estado'=>true
        ]);
        Anuncio::create([
            'mensaje'=>'hola con todosmensaje 2',
            'estado'=>false
        ]);

    }
}
