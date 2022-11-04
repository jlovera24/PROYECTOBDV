<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //use HasFactory;
    public function direcciones()
    {
        return $this->hasMany(Direccion::class);
    }
}
