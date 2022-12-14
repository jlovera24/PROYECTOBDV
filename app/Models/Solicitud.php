<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //use HasFactory;
    protected $table = 'bl_solicitudes';
    public function especialistas()
    {
        return $this->belongsTo(Especialista::class);
    }

    public function solicitante()
    {
        return $this->belongsTo(Solicitante::class);
    }

    public function seguimientos()
    {
        return $this->hasMany(Seguimiento::class);
    }

    public function libra()
    {
        return $this->belongsTo(Libra::class);
    }
}
