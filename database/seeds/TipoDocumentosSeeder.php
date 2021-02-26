<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class TipoDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_documentos')->insert([
            'nombre' => 'Cédula Ciudadanía',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipo_documentos')->insert([
            'nombre' => 'Tarjeta Identidad',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
