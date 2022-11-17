<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libra extends Model
{
    //use HasFactory;
    protected $table = 'bl_libras';
    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class);
    }
}
