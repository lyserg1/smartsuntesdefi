<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class PerfilController extends Controller
{
    //
    public function index (){
        return view('admin.index');
    }
}
