<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
    //\App\Models\Orden::factory(10)->create();

    DB::table('orden')->insert(['mesa_id' => '7','fecha_creacion' => '12/05/22', 'fecha_cierre' => '12/06/22', 'total' => '536.20' ,]);
    DB::table('orden')->insert(['mesa_id' => '8','fecha_creacion' => '13/05/22', 'fecha_cierre' => '13/06/22', 'total' => '478.20' ,]);
  }
}
