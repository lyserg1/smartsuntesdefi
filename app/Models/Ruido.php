<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruido extends Model
{
    use HasFactory;


    protected $fillable = [
        'cantidad', 'slug', 'poste_id'
    ];

    //relacion 1 a muchos inversa de ruido a Poste
    public function postes(){
        return $this->belongsTo(Poste::class);
    }




}
