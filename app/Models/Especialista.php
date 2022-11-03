<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    //use HasFactory;
    public function Cargos()
    {
        return $this->hasMany(Cargo::class);
    }

    public function Ubicaciones_Fisicas()
    {
        return $this->hasMany(Ubicacion_Fisica::class);
    }
}
