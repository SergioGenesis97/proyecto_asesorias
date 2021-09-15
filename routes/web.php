<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlador;
use App\Http\Controllers\AlumnosControlador;
use App\Http\Controllers\AsesoriasControlador;
use App\Http\Controllers\HorarioControlador;
use App\Http\Controllers\MateriasControlador;
use App\Http\Controllers\ProfesoresControlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*  HOME  */
Route::get('/', [HomeControlador::class, 'index']);


/*  ALUMNOS  */
Route::get('templates/alumnos/create', [AlumnosControlador::class, 'create']);
Route::get('templates/alumnos/show', [AlumnosControlador::class, 'show']);


/*  ASESORIAS  */
Route::get('templates/asesorias/create', [AsesoriasControlador::class, 'create']);
Route::get('templates/asesorias/show', [AsesoriasControlador::class, 'show']);


/*  HORARIO  */
Route::get('templates/horario/show', [HorarioControlador::class, 'show']);


/*  MATERIAS  */
Route::get('templates/materias/show', [MateriasControlador::class, 'show']);


/*  PROFESORES  */
Route::get('templates/profesores/create', [ProfesoresControlador::class, 'create']);
Route::get('templates/profesores/show', [ProfesoresControlador::class, 'show']);