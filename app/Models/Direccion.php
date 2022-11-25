<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //use HasFactory;
    protected $table = 'bl_direcciones';
    
    public function especialistas()
    {
        return $this->belongsTo(Especialista::class);
    }
}
