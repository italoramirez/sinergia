<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipiosSeeder::class);
        $this->call(TipoDocumentosSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(PacienteSeeder::class);
    }
}
