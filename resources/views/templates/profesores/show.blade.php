@extends('templates.layouts.footer')

@section('title', 'Mostrar Profesor')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Mostrar profesor </h2>
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
                                    <th> Ubicacion </th>
                                    <th> Especialidad </th>
                                    <th>    </th>
                                    <th>    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profesores as $profesor)
                                <tr>
                                    <td>{{$profesor->id_profesor}}</td>
                                    <td>{{$profesor->codigo_profesor}}</td>
                                    <td>{{$profesor->nombre}}</td>
                                    <td>{{$profesor->apell_pat}}</td>
                                    <td>{{$profesor->apell_mat}}</td>
                                    <td>{{$profesor->correo_institu}}</td>
                                    <td>{{$profesor->ubicacion}}</td>
                                    <td>{{$profesor->especialidad}}</td>
                                    <td><a href="#">Editar</a></td>
                                    <td><a href="#">Eliminar</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- ./card-body -->
                </div><!-- ./card -->
            </div><!-- End Content -->

@endsection

@extends('templates.layouts.header')