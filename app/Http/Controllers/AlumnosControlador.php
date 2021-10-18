<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use Illuminate\Http\Request;

class AlumnosControlador extends Controller
{
    public function create(){
        return view('templates.alumnos.create');
    }

    public function store(Request $request){
        
        $alumno = new alumnos();

        $alumno->codigo_estudiante = $request->code;
        $alumno->nombre = $request->nombre;
        $alumno->apell_pat = $request->apellPat;
        $alumno->apell_mat = $request->apellMat;
        $alumno->correo_institu = $request->correo;
        $alumno->semestre = $request->semestre;

        $alumno->save();

        return redirect()->route('alumnos.show', $alumno);
    }

    public function show(){

        $alumnos = alumnos::paginate();


        return view('templates.alumnos.show', compact('alumnos'));
    }
}
