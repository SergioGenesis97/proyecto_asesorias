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

        $asesoria = new asesorias();

        $asesoria->tema = $request->tema;
        $asesoria->estatus = $request->estatus;
        $asesoria->comentarios = $request->comment;

        $asesoria->save();

        return redirect()->route('asesorias.show', $asesoria);
    }

    public function show(){

        $asesorias = asesorias::paginate();

        return view('templates.asesorias.show', compact('asesorias'));
    }
}
