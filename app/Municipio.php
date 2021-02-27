<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //

    public function paciente ()
    {
        $this->belongsTo(Paciente::class);
    }
}
