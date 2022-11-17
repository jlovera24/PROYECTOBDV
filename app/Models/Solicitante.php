<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    //use HasFactory;
    protected $table = 'bl_solicitantes';
    
    public function gerencia()
    {
        return $this->belongsTo(Gerencia::class);
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class);
    }
}
