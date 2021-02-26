<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('departamentos')->insert([
            'nombre' => 'Antioquia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Atlántico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Boyacá',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Cundinamraca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Tolima',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }

}
