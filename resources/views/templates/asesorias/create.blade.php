@extends('templates.layouts.footer')

@section('title', 'Añadir Asesoria')

@section('content')

            <!-- Content -->
            <div class="content">
                <div>
                    <h2 class="title"> Añadir Asesoria </h2>
                </div>

                <div>
                    <div class="card bg-gradient-dark">
                        <div class="card-body">
                            <fieldset>
                                <form action="{{ route('asesorias.store') }}" method="POST">
        
                                    @csrf
        
                                    <div class="fila">  <!-- FILA -->
                                        <div class="columna">   <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="tema">Tema de la asesoria: </label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="tema"
                                                       placeholder="Tema" name="tema" required="true">
                                            </div>
                                        </div>
        
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="status">Estatus:</label>
                                            </div>
                                            <div>
                                                <input class="input form-control" type="text" id="status"
                                                       placeholder="Estatus" name="estatus" required="true">
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="fila"> <!-- FILA -->
                                        <div class="columna"> <!-- COLUMNA -->
                                            <div>
                                                <label class="text-dark" for="comment">Comentario:</label>
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
                                            <input class="btn btn-success btn-round text-dark"
                                                   type="submit"
                                                   class="save"
                                                   value="Guardar">
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