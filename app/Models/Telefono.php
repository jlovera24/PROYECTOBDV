<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    //use HasFactory;
    protected $table = 'bl_telefonos';

    public function especialistas()
    {
        return $this->hasMany(Especialista::class);
    }
}
