<?php

namespace Database\Seeders;

use App\Models\Telefono;
use Illuminate\Database\Seeder;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Telefono::factory()->count(20)->create();
    }
}
