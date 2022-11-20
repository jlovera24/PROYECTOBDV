<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //use HasFactory;
    protected $table = 'bl_direcciones';
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
    public function especialistas()
    {
        return $this->belongsToMany(Especialista::class);
    }
}
