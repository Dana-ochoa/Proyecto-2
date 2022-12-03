<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mesa;
use App\Models\Orden;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Orden::factory(10)->create();

        //Orden::factory()->times(10)
          //  ->mesa_id()->has(Mesa::factory()->count(1))
            //->create();
    }
}
