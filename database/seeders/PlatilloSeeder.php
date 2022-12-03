<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Platillo::factory(10)->create();
    }
}
