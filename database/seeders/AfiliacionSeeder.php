<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Administracion\Entities\Afiliacion;

class AfiliacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=2000;$i++)
        {
            Afiliacion::create([
                 'nombre'        =>'Afiliacion '.$i,
                 'precio'       =>mt_rand(100,3000),
                 'comisionable' =>mt_rand(0,10)/100,
                 'iva' =>mt_rand(0,10)/100,
                 'descuento_compra'=>mt_rand(0,10)/100,
                 'porcentaje_corte_binario'=>mt_rand(0,10)/100
            ]);
        }
    }
}
