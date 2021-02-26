<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'nombre' => 'Femenino',
        ]);

        DB::table('generos')->insert([
            'nombre' => 'Masculino',
        ]);
    }
}
