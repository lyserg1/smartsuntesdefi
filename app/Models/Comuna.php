<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'slug','region_id'
    ];


    //Relacion 1 a muchos inversa

    public function regions(){
        return $this->belongsTo(Region::class);
    }

}
