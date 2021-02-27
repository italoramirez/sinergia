<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'tipo_documento_id' => '1',
            'numero_documento' => '123456789',
            'nombre' => 'Carlos',
            'nombre2' => '',
            'apellido1' => 'Gómez',
            'apellido2' => 'Gutiérrez',
            'genero_id' => '2',
            'departamento_id' => '1',
            'municipio_id' => '1',
        ]);
        DB::table('pacientes')->insert([
            'tipo_documento_id' => '2',
            'numero_documento' => '987654321',
            'nombre' => 'Camila',
            'nombre2' => '',
            'apellido1' => 'Parra',
            'apellido2' => 'Zambrano',
            'genero_id' => '2',
            'departamento_id' => '2',
            'municipio_id' => '2',
        ]);
        DB::table('pacientes')->insert([
            'tipo_documento_id' => '1',
            'numero_documento' => '1122334455',
            'nombre' => 'Camilo',
            'nombre2' => '',
            'apellido1' => 'Laverde',
            'apellido2' => 'Niño',
            'genero_id' => '2',
            'departamento_id' => '3',
            'municipio_id' => '3',
        ]);
        DB::table('pacientes')->insert([
            'tipo_documento_id' => '1',
            'numero_documento' => '0908070605',
            'nombre' => 'Luis',
            'nombre2' => 'Fernando',
            'apellido1' => 'Castellanos',
            'apellido2' => 'Melo',
            'genero_id' => '2',
            'departamento_id' => '4',
            'municipio_id' => '4',
        ]);
        DB::table('pacientes')->insert([
            'tipo_documento_id' => '1',
            'numero_documento' => '123456789',
            'nombre' => 'Blanca',
            'nombre2' => '',
            'apellido1' => 'Cedeño',
            'apellido2' => 'Ávila',
            'genero_id' => '1',
            'departamento_id' => '5',
            'municipio_id' => '5',
        ]);
    }
}
