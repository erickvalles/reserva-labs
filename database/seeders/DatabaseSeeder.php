<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('telefonos')->truncate();
        DB::table('docente')->truncate();
        DB::table('equipos')->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS = 1;");

        $this->call([
            EquiposSeeder::class,
            DocenteSeeder::class,
            TelefonoSeeder::class
        ]);

    }
}
