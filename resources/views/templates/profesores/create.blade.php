@extends('templates.layouts.footer')

@section('title', 'Añadir Profesor')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Añadir profesor </h2>
                </div>
                <div>
                    <div class="card bg-gradient-success">
                        <div class="card-body">
                            <fieldset>
                                <form action="{{ route('profesores.store') }}" method="POST">
                                    
                                    @csrf
                                    
                                    <div class="fila">  <!-- FILA -->
                                        <div class="columna">   <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="codProf">Codigo del profesor: </label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="codProf"
                                                    placeholder="Codigo" name="codigo" required="true">
                                            </div>
                                        </div>
        
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="nombre">Nombre:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="nombre"
                                                    placeholder="Nombre" name="nombre" required="true">
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="fila"> <!-- FILA -->
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="apellPat">Apellido Paterno:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="apellPat"
                                                    placeholder="Apellido paterno" name="apell_pat" required="true">
                                            </div>
                                        </div>
        
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="apellMat">Apellido Materno:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="apellMat"
                                                    placeholder="Apellido materno" name="apell_mat" required="true">
                                            </div>
                                        </div>
                                    </div> <!-- END FILA -->
        
                                    <div class="fila"> <!-- FILA -->
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="correo">Correo Institucional:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="correo"
                                                    placeholder="Correo" name="correo" required="true">
                                            </div>
                                        </div>
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="ubicacion">Ubicación:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="ubicacion"
                                                    placeholder="Ubicación" name="ubicacion" required="true">
                                            </div>
                                            
                                        </div>
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="especialidad">Especialidad:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="especialidad"
                                                    placeholder="Especialidad" name="especialidad" required="true">
                                            </div>
                                            
                                        </div>
                                    </div> <!-- END FILA -->
        
                                    <div class="fila">   <!-- FILA -->
        
                                        <div>   <!-- COLUMNA -->
                                            <input class="btn btn-success btn-round save text-dark"
                                                type="submit"
                                                value="Guardar">
        
                                        </div>  <!-- END COLUMNA -->
        
                                        <div>   <!-- COLUMNA -->
                                            <input class="btn btn-danger btn-round clear text-dark"
                                                type="reset"
                                                value="Cancelar">
        
                                        </div>  <!-- END COLUMNA -->
        
                                    </div>  <!-- END FILA-->
                                </form>
                            </fieldset>
                        </div><!-- ./card-body -->
                    </div><!-- ./card -->
                </div>
            </div><!-- End Content -->
@endsection

@extends('templates.layouts.header')