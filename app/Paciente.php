<?php

namespace App;

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
        'genero_id',   
        'departamento_id',
        'munuicipio_id' 
    ];
}
