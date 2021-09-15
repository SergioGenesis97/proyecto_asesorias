@extends('templates.layouts.footer')

@section('title', 'Añadir Alumno')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Añadir profesor </h2>
                </div>

                <div>
                    <fieldset>
                        <form action="#" method="get">

                            <div class="fila">  <!-- FILA -->
                                <div class="columna">   <!-- COLUMNA -->
                                    <div>
                                        <label for="codProf">Codigo del profesor: </label>
                                    </div>
                                    <div>
                                        <input class="input" type="text" id="codProf"
                                               placeholder="Codigo">
                                    </div>
                                </div>

                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="nombre">Nombre:</label>
                                    </div>
                                    <div>
                                        <input class="input" type="text" id="nombre"
                                               placeholder="Nombre">
                                    </div>
                                </div>
                            </div>

                            <div class="fila"> <!-- FILA -->
                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="apellPat">Apellido Paterno:</label>
                                    </div>
                                    <div>
                                        <input class="input" type="text" id="apellPat"
                                               placeholder="Apellido paterno">
                                    </div>
                                </div>

                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="apellMat">Apellido Materno:</label>
                                    </div>
                                    <div>
                                        <input class="input" type="text" id="apellMat"
                                               placeholder="Apellido materno">
                                    </div>
                                </div>
                            </div> <!-- END FILA -->

                            <div class="fila"> <!-- FILA -->
                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="correo">Correo Institucional:</label>
                                    </div>
                                    <div>
                                        <input class="input" type="text" id="correo"
                                               placeholder="Correo">
                                    </div>
                                </div>
                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="ubicacion">Ubicación:</label>
                                    </div>
                                    <div>
                                        <input class="input" type="text" id="ubicacion"
                                               placeholder="Ubicación">
                                    </div>
                                    
                                </div>
                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="especialidad">Especialidad:</label>
                                    </div>
                                    <div>
                                        <input class="input" type="text" id="especialidad"
                                               placeholder="Especialidad">
                                    </div>
                                    
                                </div>
                            </div> <!-- END FILA -->

                            <div class="fila">   <!-- FILA -->

                                <div>   <!-- COLUMNA -->
                                    <input class="btn btn-success btn-round"
                                           type="submit"
                                           class="save"
                                           value="Guardar">

                                </div>  <!-- END COLUMNA -->

                                <div>   <!-- COLUMNA -->
                                    <input class="btn btn-danger btn-round"
                                           type="reset"
                                           class="clear"
                                           value="Cancelar">

                                </div>  <!-- END COLUMNA -->

                            </div>  <!-- END FILA-->

                        </form>

                    </fieldset>
                </div>

            </div>
            <!-- End Content -->
@endsection

@extends('templates.layouts.header')