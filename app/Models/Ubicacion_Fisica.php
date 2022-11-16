<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion_Fisica extends Model
{
    //use HasFactory;
    protected $table = 'bl_ubicaciones_fisicas';
    public function especialistas()
    {
        return $this->hasMany(Especialista::class);
    }
}
