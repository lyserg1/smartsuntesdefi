<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Clima extends Model
{
    use HasFactory;

    protected $fillable = [
        'temperatura', 'humedad', 'poste_id'
    ];

   /*  //relacion muchos a muchos - ya no va

    public function regions(){
        return $this->belongsToMany(Region::class);
    } */

    //Relacion 1 a muchos inversa
/*
    public function user(){
        return $this->belongsTo(User::class);
    } */


    //relacion 1 a muchos de poste a clima
    public function postes(){
        return $this->belongsTo(Poste::class);
    }

}
