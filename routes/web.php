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

/*-------------------------------------------------------------------------------------------------------------------------*/
/*                                          ******  VIEWS *******                                            */

/*  HOME  */
Route::get('/', [HomeControlador::class, 'index']);


/*  ALUMNOS  */
Route::get('templates/alumnos/create', [AlumnosControlador::class, 'create'])->name('alumnos.create');
Route::get('templates/alumnos/show', [AlumnosControlador::class, 'show'])->name('alumnos.show');


/*  ASESORIAS  */
Route::get('templates/asesorias/create', [AsesoriasControlador::class, 'create'])->name('asesorias.create');
Route::get('templates/asesorias/show', [AsesoriasControlador::class, 'show'])->name('asesorias.show');


/*  HORARIO  */
Route::get('templates/horario/show', [HorarioControlador::class, 'show']);


/*  MATERIAS  */
Route::get('templates/materias/show', [MateriasControlador::class, 'show']);


/*  PROFESORES  */
Route::get('templates/profesores/create', [ProfesoresControlador::class, 'create'])->name('profesores.create');
Route::get('templates/profesores/show', [ProfesoresControlador::class, 'show'])->name('profesores.show');


/*-------------------------------------------------------------------------------------------------------------------------*/
/*                                         ******  METODOS *******                                     */

/*  Guardar Alumnos */
Route::post('templates/alumnos/create', [AlumnosControlador::class, 'store'])->name('alumnos.store');

/*  Guardar Asesorias */
Route::post('templates/asesorias/create', [AsesoriasControlador::class, 'store'])->name('asesorias.store');

/*  Guardar Profesores */
Route::post('templates/profesores/create', [ProfesoresControlador::class, 'store'])->name('profesores.store');