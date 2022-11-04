<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camara extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'conteo', 'slug', 'poste_id'
    ];

    //Relacion ujno a multiselectChoices
   /*  public function imagens(){
        return $this->hasMany(Imagen::class);
    } */


    /* public function user(){
        return $this->belongsTo(User::class);
    } */

    //Relacion uno a muchos inversa
    public function poste(){
        return $this->belongsTo(Poste::class);
    }


    //relaion 1 a muchos de camara a iamgen
    public function imagens(){
        return $this->hasMany(Imagen::class);
    }


}
