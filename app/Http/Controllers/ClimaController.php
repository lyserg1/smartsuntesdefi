<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clima;

class ClimaController extends Controller
{
    //

    public function index (){

        $climas = Clima::all();


        return view('clima.index', compact('climas'));
    }




}
