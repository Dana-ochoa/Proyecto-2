<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Reservation::factory(10)->create();

       /* $data = [
            'personas' => '2',
            'fecha' => '12/06/22',
            'hora' => '07:30',
            'nombre' => 'CEsme Covarrubias',
            'correo' => 'carlos@gmail.com',
            'telefono' => '331254456',
        ];
        DB::table('reservations')->insert($data);*/
    }
}
