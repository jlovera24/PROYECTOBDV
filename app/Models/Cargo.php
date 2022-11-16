<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //use HasFactory;
    protected $table = 'bl_cargos';
    public function especialistas()
    {
        return $this->hasMany(Especialista::class);
    }
}