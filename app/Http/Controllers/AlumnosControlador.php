<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosControlador extends Controller
{
    public function create(){
        return view('templates.alumnos.create');
    }

    public function show(){
        return view('templates.alumnos.show');
    }
}
