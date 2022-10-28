<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;


    //Relacion ujno a multiselectChoices
    public function imagens(){
        return $this->hasMany(Imagen::class);
    }


    public function camaras(){
        return $this->belongsTo(Camara::class);
    }


}
