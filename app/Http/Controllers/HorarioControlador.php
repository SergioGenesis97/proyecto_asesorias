<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioControlador extends Controller
{
    public function show(){
        return view('templates.horario.show');
    }
}
