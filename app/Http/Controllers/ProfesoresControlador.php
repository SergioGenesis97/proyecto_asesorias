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

        /* Realiza las validaciones antes de guardar en
        la base de datos  */
        $request->validate([
            'codigo_profesor' => 'required|unique:profesores|int',
            'nombre' => 'required|alpha',
            'apell_pat' => 'required|alpha',
            'apell_mat' => 'required|alpha',
            'correo_institu' => 'required|email',
            'ubicacion' => 'required|string',
            'especialidad' => 'required|string'
        ]);

        
        $profesores = new profesores();

        $profesores->codigo_profesor = $request->codigo_profesor;
        $profesores->nombre = $request->nombre;
        $profesores->apell_pat = $request->apell_pat;
        $profesores->apell_mat = $request->apell_mat;
        $profesores->correo_institu = $request->correo_institu;
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
