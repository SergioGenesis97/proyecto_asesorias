@extends('templates.layouts.footer')

@section('title', 'Añadir Alumno')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Añadir Asesoria </h2>
                </div>

                <div>
                    <fieldset>
                        <form action="#" method="get" id="RegisterValidation">

                            <div class="fila">  <!-- FILA -->
                                <div class="columna">   <!-- COLUMNA -->
                                    <div>
                                        <label for="tema">Tema de la asesoria: </label>
                                    </div>
                                    <div>
                                        <input class="input form-control" type="text" id="tema"
                                               placeholder="Tema" required="true">
                                    </div>
                                </div>

                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="status">Estatus:</label>
                                    </div>
                                    <div>
                                        <input class="input form-control" type="text" id="status"
                                               placeholder="Estatus" required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="fila"> <!-- FILA -->
                                <div class="columna"> <!-- COLUMNA -->
                                    <div>
                                        <label for="comment">Comentario:</label>
                                    </div>
                                    <div>
                                        <textarea name="comment" id="comment"
                                                  class="input form-control"
                                                  cols="30" rows="10"
                                                  placeholder="Escriba aquí sus Comentarios"></textarea>
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