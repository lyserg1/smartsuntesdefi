<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clima extends Model
{
    use HasFactory;


    //relacion muchos a muchos

    public function regions(){
        return $this->belongsToMany(Region::class);
    }

    //Relacion 1 a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }


}
