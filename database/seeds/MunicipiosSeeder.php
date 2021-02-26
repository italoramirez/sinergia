<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            'nombre' => 'Medellín',
            'departamento_id' => 1
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Envigado',
            'departamento_id' => 1
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Soledad',
            'departamento_id' => 2
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Galapa',
            'departamento_id' => 2
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Sogamosos',
            'departamento_id' => 3
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Tunja',
            'departamento_id' => 3
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Bogotá',
            'departamento_id' => 4
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Mosquera',
            'departamento_id' => 4
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Ibagué',
            'departamento_id' => 5
        ]);

        DB::table('municipios')->insert([
            'nombre' => 'Anzoátegui',
            'departamento_id' => 5
        ]);

        
    }
}
