@extends('templates.layouts.footer')

@section('title', 'Añadir Alumno')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Mostrar alumno </h2>
                </div>
                <div class="card bg-gradient-success">
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th> id </th>
                                    <th> Codigo </th>
                                    <th> Nombre </th>
                                    <th> Apellido Paterno </th>
                                    <th> Apellido Materno </th>
                                    <th> Correo </th>
                                    <th> Semestre </th>
                                    <th>    </th>
                                    <th>    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                <tr>
                                    <td>{{$alumno->id_alumnos}}</td>
                                    <td>{{$alumno->codigo_estudiante}}</td>
                                    <td>{{$alumno->nombre}}</td>
                                    <td>{{$alumno->apell_pat}}</td>
                                    <td>{{$alumno->apell_mat}}</td>
                                    <td>{{$alumno->correo_institu}}</td>
                                    <td>{{$alumno->semestre}}</td>
                                    <td><a href="#">Editar</a></td>
                                    <td><a href="#">Eliminar</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Content -->

@endsection

@extends('templates.layouts.header')