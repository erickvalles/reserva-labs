<?php

namespace Database\Seeders;

use App\Models\Docente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::truncate('docente');
        Docente::factory()->count(50)->create();
    }
}
