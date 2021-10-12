@extends('templates.layouts.footer')

@section('title', 'Añadir Alumno')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Añadir alumno </h2>
                </div>

                <div>
                    <fieldset>
                        <form action="#" method="get" id="RegisterValidation">

                            <div class="fila">  <!-- FILA -->
                                <div class="columna">   <!-- COLUMNA -->
                                    <div>
                                        <label for="codEstudiante">Codigo del estudiante: </label>
                                    </div>
                                    <div>
                                        <input class="input form-control" type="text" id="codEstudiante"
                                               placeholder="Codigo" required="true">
                                    </div>
                                </div>

                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="nombre">Nombre:</label>
                                    </div>
                                    <div>
                                        <input class="input form-control" type="text" id="nombre"
                                               placeholder="Nombre" required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="fila"> <!-- FILA -->
                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="apellPat">Apellido Paterno:</label>
                                    </div>
                                    <div>
                                        <input class="input form-control" type="text" id="apellPat"
                                               placeholder="Apellido paterno" required="true">
                                    </div>
                                </div>

                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="apellMat">Apellido Materno:</label>
                                    </div>
                                    <div>
                                        <input class="input form-control" type="text" id="apellMat"
                                               placeholder="Apellido materno" required="true">
                                    </div>
                                </div>
                            </div> <!-- END FILA -->

                            <div class="fila"> <!-- FILA -->
                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="correo">Correo Institucional:</label>
                                    </div>
                                    <div>
                                        <input class="input form-control" type="text" id="correo"
                                               placeholder="Correo" required="true">
                                    </div>
                                </div>

                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="semestre">Semestre actual:</label>
                                    </div>
                                    <div>
                                        <select class="input form-control" name="semestre" id="semestre" required="true">
                                            <option value="">Selecciona tu semestre</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
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
                        <script type="text/javascript">
                            $("#RegisterValidation").validate();
                        </script>
                    </fieldset>
                </div>
            </div>
            <!-- End Content -->

@endsection

@extends('templates.layouts.header')