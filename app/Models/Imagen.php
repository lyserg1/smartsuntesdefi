<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta', 'camara_id'
    ];



    public function camaras(){
        return $this->belongsTo(Camara::class);
    }



}
