<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    //use HasFactory;
    protected $table = 'bl_especialistas';
    public function direcciones()
    {
        return $this->belongsToMany(Direccion::class);    
    }

    public function telefonos()
    {
        return $this->belongsToMany(Telefono::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function ubicacion_Fisica()
    {
        return $this->belongsTo(Ubicacion_Fisica::class);
    }

    public function gerencia()
    {
        return $this->belongsTo(Gerencia::class);
    }
    
    public function solicitudes()
    {
        return $this->belongsToMany(Solicitud::class);
    }

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }

    

}
