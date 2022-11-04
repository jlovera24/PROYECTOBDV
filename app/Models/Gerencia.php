<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerencia extends Model
{
    //use HasFactory;
    public function especialistas()
    {
        return $this->hasMany(Especialista::class);
    }

    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class);
    }

}
