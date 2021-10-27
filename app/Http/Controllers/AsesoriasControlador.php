<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\asesorias;
use Illuminate\Http\Request;

class AsesoriasControlador extends Controller
{
    public function create(){
        return view('templates.asesorias.create');
    }

    public function store(Request $request){

        /* Realiza las validaciones antes de guardar en
        la base de datos  */
        $request->validate([
            'tema' => 'required',
            'estatus' => 'required',
            'comentarios' => 'required|string|min:5'
        ]);


        $asesoria = new asesorias();

        $asesoria->tema = $request->tema;
        $asesoria->estatus = $request->estatus;
        $asesoria->comentarios = $request->comentarios;

        $asesoria->save();

        return redirect()->route('asesorias.show', $asesoria);
    }

    public function show(){

        $asesorias = asesorias::paginate();

        return view('templates.asesorias.show', compact('asesorias'));
    }
}
