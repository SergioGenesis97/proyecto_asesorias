<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesoriasControlador extends Controller
{
    public function create(){
        return view('templates.asesorias.create');
    }

    public function show(){
        return view('templates.asesorias.show');
    }
}
