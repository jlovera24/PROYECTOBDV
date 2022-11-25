<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
   // use HasFactory;
   protected $table = 'bl_equipos';
   public function especialista()
   {
       return $this->belongsto(Especialista::class);
   }
}
