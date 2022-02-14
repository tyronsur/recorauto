<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itv extends Model
{
    use HasFactory;
    
    public function coche(){
        return $this->belongsTo(Coche::class);
    }
}
