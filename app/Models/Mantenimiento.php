<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;
        // Relaccion uno a muchos
        public function user(){
            return $this->belongsTo(User::class);
        }
        public function coche(){
            return $this->belongsTo(Coche::class);
        }
}
