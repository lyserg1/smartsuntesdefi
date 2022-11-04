<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luz extends Model
{
    use HasFactory;

    protected $fillable = [
        'intensidad', 'poste_id'
    ];

    //Relacion 1 a muchos inversa de Poste a luzs
    public function postes(){
        return $this->belongsTo(Poste::class);
    }



}
