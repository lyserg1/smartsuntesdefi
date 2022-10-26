<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamaraController extends Controller
{

    public function index (){
        return view('camara.index');
    }
}
