<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    //
    public function index(){
        return view('inicio');
    }


    public function publicarReceta(){
        return view('publicar');
    }
}
