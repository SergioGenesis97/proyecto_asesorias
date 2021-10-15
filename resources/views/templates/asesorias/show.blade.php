@extends('templates.layouts.footer')

@section('title', 'Mostrar Asesoria')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Mostrar asesorias </h2>
                </div>

                <div class="card bg-gradient-success">
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th> id </th>
                                    <th> Tema </th>
                                    <th> Estatus </th>
                                    <th> Comentarios </th>
                                    <th>    </th>
                                    <th>    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asesorias as $asesoria)
                                <tr>
                                    <td>{{$asesoria->id_asesorias}}</td>
                                    <td>{{$asesoria->tema}}</td>
                                    <td>{{$asesoria->estatus}}</td>
                                    <td>{{$asesoria->comentarios}}</td>
                                    <td><a href="#">Editar</a></td>
                                    <td><a href="#">Eliminar</a></td>
                                </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- ./card-body -->
                </div><!-- ./card -->
            </div><!-- ./End Content -->

@endsection

@extends('templates.layouts.header')