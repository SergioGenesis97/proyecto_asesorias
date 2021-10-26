@extends('templates.layouts.footer')

@section('title', 'Añadir Alumno')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Añadir alumno </h2>
                </div>

                <div>
                    <div class="card bg-gradient-dark">
                        <div class="card-body">
                            <fieldset>
                                <form action="{{ route('alumnos.store') }}" method="POST">
        
                                    @csrf
        
                                    <div class="fila">  <!-- FILA -->
                                        <div class="columna">   <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="codEstudiante">Codigo del estudiante: </label>
                                            </div>
                                            <div>
                                                <input class="input form-control" name="codigo_estudiante" type="text" id="codEstudiante"
                                                       placeholder="Codigo" required="true" value="{{ old('codigo_estudiante') }}">
                                                
                                                <!-- muestra los errores de las validaciones del AlumnosControlador en forma de if -->
                                                @error('codigo_estudiante')
                                                    <div class="alert alert-danger text-dark" role="alert">
                                                        *{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="nombre">Nombre:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" name="nombre" type="text" id="nombre"
                                                       placeholder="Nombre" required="true" value="{{ old('nombre') }}">
                                                
                                                <!-- muestra los errores de las validaciones del AlumnosControlador en forma de if -->
                                                @error('nombre')
                                                    <div class="alert alert-danger text-dark" role="alert">
                                                        *{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="fila"> <!-- FILA -->
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="apellPat">Apellido Paterno:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" name="apellPat" type="text" id="apellPat"
                                                       placeholder="Apellido paterno" required="true" value="{{ old('apellPat') }}">
                                                
                                                <!-- muestra los errores de las validaciones del AlumnosControlador en forma de if -->
                                                @error('apellPat')
                                                    <div class="alert alert-danger text-dark" role="alert">
                                                        *{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="apellMat">Apellido Materno:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" name="apellMat" type="text" id="apellMat"
                                                       placeholder="Apellido materno" required="true" value="{{ old('apellMat') }}">
                                                
                                                <!-- muestra los errores de las validaciones del AlumnosControlador en forma de if -->
                                                @error('apellMat')
                                                    <div class="alert alert-danger text-dark" role="alert">
                                                        *{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> <!-- END FILA -->
        
                                    <div class="fila"> <!-- FILA -->
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="correo">Correo Institucional:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" name="correo" type="text" id="correo"
                                                       placeholder="Correo" required="true" value="{{ old('correo') }}">
                                                
                                                <!-- muestra los errores de las validaciones del AlumnosControlador en forma de if -->
                                                @error('correo')
                                                    <div class="alert alert-danger text-dark" role="alert">
                                                        *{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="semestre">Semestre actual:</label>
                                            </div>
                                            <div>
                                                <select class="input form-control" name="semestre" id="semestre" required="true">
                                                    <option value="">Selecciona tu semestre</option>
                                                    <option value="1" {{ old('semestre') == 1 ? 'selected' : '' }} >1</option>
                                                    <option value="2" {{ old('semestre') == 2 ? 'selected' : '' }} >2</option>
                                                    <option value="3" {{ old('semestre') == 3 ? 'selected' : '' }} >3</option>
                                                    <option value="4" {{ old('semestre') == 4 ? 'selected' : '' }} >4</option>
                                                    <option value="5" {{ old('semestre') == 5 ? 'selected' : '' }} >5</option>
                                                    <option value="6" {{ old('semestre') == 6 ? 'selected' : '' }} >6</option>
                                                    <option value="7" {{ old('semestre') == 7 ? 'selected' : '' }} >7</option>
                                                    <option value="8" {{ old('semestre') == 8 ? 'selected' : '' }} >8</option>
                                                    <option value="9" {{ old('semestre') == 9 ? 'selected' : '' }} >9 o &#43;</option>
                                                    
                                                </select>

                                                <!-- muestra los errores de las validaciones del AlumnosControlador en forma de if -->
                                                @error('semestre')
                                                    <div class="alert alert-danger text-dark" role="alert">
                                                        *{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> <!-- END FILA -->
        
                                    <div class="fila">   <!-- FILA -->
                                        <div>   <!-- COLUMNA -->
                                            <input class="btn btn-success btn-round text-dark"
                                                   type="submit"
                                                   class="save"
                                                   value="Guardar"
                                                   onclick="getDataStudent()">
        
                                        </div>  <!-- END COLUMNA -->
        
                                        <div>   <!-- COLUMNA -->
                                            <input class="btn btn-danger btn-round text-dark"
                                                   type="reset"
                                                   class="clear"
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