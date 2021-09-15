<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresControlador extends Controller
{
    public function create(){
        return view('templates.profesores.create');
    }

    public function show(){
        return view('templates.profesores.show');
    }
}
