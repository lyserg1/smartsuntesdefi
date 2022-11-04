<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'slug'
    ];



    //Relacion ujno a multiselectChoices
    /* public function comunas(){
        return $this->hasMany(Comuna::class);
    }


    public function climas(){
        return $this->belongsToMany(Clima::class);
    } */


    //Relacion 1 a muchos inversa de Poste a region
    public function postes(){
        return $this->belongsTo(Poste::class);
    }


}
