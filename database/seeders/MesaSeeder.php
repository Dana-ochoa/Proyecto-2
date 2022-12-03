<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Mesa::factory(10)->create();
    }
}
