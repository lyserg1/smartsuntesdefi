<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;


    protected $fillable = [
        'direccion', 'region', 'comuna', 'slug', 'estado', 'user_id'
    ];


    public function Users(){
        return $this->belongsTo(User::class);
    }


    //relacion de 1 a muchos de poste a climas
    public function climas(){
        return $this->hasMany(Clima::class);
    }


    //relacion 1 a muchos de Poste a camara
    public function camaras(){
        return $this->hasMany(Camara::class);
    }


    //relacion 1 a muchos de Poste a luz
    public function luzs(){
        return $this->hasMany(Luz::class);
    }


    //relacion 1 a muchos de Poste a ruido
    public function ruidos(){
        return $this->hasMany(Ruido::class);
    }


    //relacion 1 a muchos de Poste a region
    public function regions(){
        return $this->hasMany(Region::class);
    }

}
