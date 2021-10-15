<?php

namespace App\Http\Controllers;

use App\Models\profesores;
use Illuminate\Http\Request;

class ProfesoresControlador extends Controller
{
    public function create(){
        return view('templates.profesores.create');
    }

    public function store(Request $request){
        
        $profesores = new profesores();

        $profesores->codigo_profesor = $request->codigo;
        $profesores->nombre = $request->nombre;
        $profesores->apell_pat = $request->apell_pat;
        $profesores->apell_mat = $request->apell_mat;
        $profesores->correo_institu = $request->correo;
        $profesores->ubicacion = $request->ubicacion;
        $profesores->especialidad = $request->especialidad;

        $profesores->save();

        return redirect()->route('profesores.show', $profesores);
    }

    public function show(){

        $profesores = profesores::paginate();

        return view('templates.profesores.show', compact('profesores'));
    }
}
