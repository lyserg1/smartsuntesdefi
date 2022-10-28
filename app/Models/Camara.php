<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camara extends Model
{
    use HasFactory;


    //Relacion ujno a multiselectChoices
    public function imagens(){
        return $this->hasMany(Imagen::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }


}
