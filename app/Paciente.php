<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable = [
        'tipo_documento_id',
        'numero_documento' ,
        'nombre' ,
        'nombre2',
        'apellido1',   
        'apellido2',
        'departamento_id',
        'genero_id',   
        'municipio_id' 
    ];

    public static function createPaciente ($data) 
    {
        DB::transaction(function () use ($data){
            $paciente = Paciente::create([
                'tipo_documento_id' => $data['tipo_documento_id'],
                'numero_documento' => $data['documento'],
                'nombre' => $data['nombre'],
                'nombre2' => $data['nombre2'],
                'apellido1' => $data['apellido1'],
                'apellido2' => $data['apellido2'],
                'genero_id' => $data['genero_id'],
                'departamento_id' => $data['departamento_id'],
                'municipio_id' => $data['municipio_id']
            ]);
        });
    } 

    public function departamento () 
    {
       return $this->belongsTo(Departamento::class, 'departamento_id', 'id');
    }

    public function municipio () 
    {
        return $this->hasOne(Municipio::class, 'id', 'municipio_id');
    }

    public function genero ()
    {
        return $this->hasOne(Genero::class, 'id', 'genero_id');
    }

    public function documento () 
    {
        return $this->hasOne(TipoDocumento::class, 'id', 'tipo_documento_id');
    }
    

}
