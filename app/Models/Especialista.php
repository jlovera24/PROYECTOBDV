<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    //use HasFactory;
    public function cargos()
    {
        return $this->hasMany(Cargo::class);
    }

    public function ubicaciones_Fisicas()
    {
        return $this->hasMany(Ubicacion_Fisica::class);
    }
}
