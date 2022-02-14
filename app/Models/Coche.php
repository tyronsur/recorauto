<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

       // Relaccion uno a muchos
    public function itv(){
        return $this->hasOne(Itv::class);
        }
    public function seguro(){
        return $this->hasOne(Seguro::class);
    }
    public function mantenimiento(){
        return $this->hasOne(Mantenimiento::class);
    }
    public function citaitv(){
        return $this->hasOne(Citaitv::class);
    }
}