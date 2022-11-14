<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    //use HasFactory;
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class);
    }
}