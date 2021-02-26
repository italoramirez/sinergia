<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            
            $table->timestamps();
        });

        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('departamento_id')->references('id')->on('departamentos');
            
            $table->timestamps();
        });

        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            
            $table->timestamps();
        });


        Schema::create('tipo_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            
            $table->timestamps();
        });
        
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_documento_id')->references('id')->on('tipo_documentos');
            $table->integer('numero_documento');
            $table->string('nombre');
            $table->string('nombre2')->nullable();
            $table->string('apellido1');
            $table->string('apellido2');
            $table->foreignId('genero_id')->references('id')->on('generos');
            $table->foreignId('departamento_id')->references('id')->on('departamentos');
            $table->foreignId('municipio_id')->references('id')->on('municipios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('generos');
        Schema::dropIfExists('tipo_documentos');
        Schema::dropIfExists('pacientes');
    }
}
